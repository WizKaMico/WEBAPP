// Initialize AG-Grid
var gridOptions1 = {
    columnDefs: [
        
      {
        headerName: 'CLIENT INFORMATION',
        children: [
          { headerName: 'EMAIL', field: 'email' },
          { headerName: 'PHONE', field: 'phone' },
          { headerName: 'STATUS', field: 'status' },
          { headerName: 'CODE', field: 'code' }
        ],
      }
      
      // Add more header groups or columns as needed
    ],
    defaultColDef: {
      resizable: true,
      suppressSizeToFit: true,
      width: 150,
      enableRowGroup: true,
      enablePivot: true,
      enableValue: true,
    },
    rowData: [], // Initial empty data
    // Other AG-Grid configuration options
  };
  



// Fetch data from the server and populate the grid
function fetchAndPopulateDataClient() {
    fetch('../api/get_allClient.php') // Replace with your server-side endpoint
      .then(response => response.json())
      .then(data => {
        gridOptions1.api.setRowData(data);
        console.log(data)
      })
      .catch(error => {
        console.error('Error fetching data:', error);
      });
  }


  
  // Call the function to fetch and populate data when the page loads
  document.addEventListener('DOMContentLoaded', function() {
    var gridDivClient = document.querySelector('#gridClient');
    new agGrid.Grid(gridDivClient, gridOptions1);
  
    // Fetch and populate data
    fetchAndPopulateDataClient();
  });