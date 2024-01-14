
function exportTableToCSV() {
  const csvData = getTableData();
  const filename = "data.csv";
  const blob = new Blob([csvData], { type: "text/csv" });
  const link = document.createElement("a");
  link.href = URL.createObjectURL(blob);
  link.download = filename;
  link.click();
}

function getTableData() {
  const table = document.getElementById("ls_table");
  const rows = table.querySelectorAll("tr");

  let csvData = "";
  rows.forEach(function (row) {
    let cells = row.querySelectorAll("td");
    let rowData = "";
    cells.forEach(function (cell) {
      rowData += cell.textContent + ",";
    });
    csvData += rowData.slice(0, -1) + "\n"; 
  });

  return csvData;
}


