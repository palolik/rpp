function exportTableToExcel() {
    const csvData = getTableData();
    const filename = "export.xlsx";
  
    // Create a temporary workbook and worksheet
    const workbook = XLSX.utils.book_new();
    const worksheet = XLSX.utils.json_to_sheet([{ name: "Sheet1", data: XLSX.utils.csv_to_json(csvData) }]);
  
    // Append the worksheet to the workbook
    XLSX.utils.book_append_sheet(workbook, worksheet, "Sheet1");
  
    // Convert the workbook to a binary string
    const excelBuffer = XLSX.write(workbook, { type: "array", bookType: "xlsx" });
  
    // Create a blob object with the Excel data
    const blob = new Blob([excelBuffer], { type: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" });
  
    // Create a download link and trigger download
    const link = document.createElement("a");
    link.href = URL.createObjectURL(blob);
    link.download = filename;
    link.click();
  }
  
function exportTableToCSV() {
  const csvData = getTableData();
  const filename = "export.csv";
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
    csvData += rowData.slice(0, -1) + "\n"; // Remove trailing comma
  });

  return csvData;
}


