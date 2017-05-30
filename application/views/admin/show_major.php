
<html>
<head>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:#f5f5f5}
</style>

</head>
<body>

<h2>Hoverable Table</h2>
<p>Move the mouse over the table rows to see the effect.</p>
 <div class="table-responsive">          
  <table class="table">
<table>
  <tr>
    <th>รหัสสาขา</th>
    <th>ชื่่อสาขาวิชา</th>
    <th>แก้ไข/ลบ</th>
  </tr>
  <tr>
    <td>Peter</td>
    <td>Griffin</td>
    <td> 
       <a href="#">
          <span class="glyphicon glyphicon-pencil" style="font-size:20px;color:navy;"></span>
        </a>
        &nbsp; &nbsp;
        <a href="#">
          <span class="glyphicon glyphicon-trash" style="font-size:20px;color:red;"></span>
        </a></td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Griffin</td>
    <td>$150</td>
  </tr>
  <tr>
    <td>Joe</td>
    <td>Swanson</td>
    <td>$300</td>
  </tr>
  <tr>
    <td>Cleveland</td>
    <td>Brown</td>
    <td>$250</td>
  </tr>
</table>

</div>
</body>
</html>
