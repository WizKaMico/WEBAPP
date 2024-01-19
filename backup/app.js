const cron = require('node-cron');
const mysql = require('mysql');
const fs = require('fs');

const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'capstone_app'
});

// Function to perform database backup
function performDatabaseBackup() {
    const backupFileName = `backup_${Date.now()}.sql`;
  
    connection.query('SHOW TABLES', (err, tables) => {
      if (err) {
        console.error('Error fetching tables:', err);
        return;
      }
  
      const tableNames = tables.map(table => table[`Tables_in_${connection.config.database}`]);
  
      const createBackupFile = fs.createWriteStream(backupFileName, { flags: 'a' });
  
      createBackupFile.write(`-- phpMyAdmin SQL Dump\n-- version 4.8.5\n-- ...\n\n`);
  
      const queryLoop = () => {
        const tableName = tableNames.shift();
        if (!tableName) {
          createBackupFile.end(() => {
            console.log('Backup created successfully:', backupFileName);
          });
          return;
        }
  
        connection.query(`SELECT * FROM ${tableName}`, (err, results, fields) => {
          if (err) {
            console.error(`Error fetching data from table ${tableName}:`, err);
            queryLoop(); // Move to the next table even if an error occurs
            return;
          }
  
          results.forEach(row => {
            const insertQuery = `INSERT INTO ${tableName} VALUES (${Object.values(row).map(value => connection.escape(value)).join(', ')});`;
            createBackupFile.write(`${insertQuery}\n`);
          });
  
          queryLoop(); // Proceed to the next table
        });
      };
  
      queryLoop(); // Start the query loop
    });
  }
  

// Run the backup function immediately upon starting the application
performDatabaseBackup();

// Cron job to run daily at 1:00 AM (adjust the schedule as needed)
cron.schedule('0 1 * * *', () => {
  performDatabaseBackup();
}, {
  timezone: 'Asia/Manila', // Specify your timezone (e.g., 'America/New_York')
});

// Your other application logic goes here...
// This can include your web server setup, API endpoints, etc.
// ...
