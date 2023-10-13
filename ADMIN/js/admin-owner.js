// Initialize AG-Grid
var gridOptions2 = {
    columnDefs: [
        
      {
        headerName: 'OWNER INFORMATION',
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
function fetchAndPopulateDataOwner() {
    fetch('../api/get_allOwner.php') // Replace with your server-side endpoint
      .then(response => response.json())
      .then(data => {
        gridOptions2.api.setRowData(data);
        console.log(data)
      })
      .catch(error => {
        console.error('Error fetching data:', error);
      });
  }


  
  // Call the function to fetch and populate data when the page loads
  document.addEventListener('DOMContentLoaded', function() {
    var gridDivOwner = document.querySelector('#gridOwner');
    new agGrid.Grid(gridDivOwner, gridOptions2);
  
    // Fetch and populate data
    fetchAndPopulateDataOwner();
  });