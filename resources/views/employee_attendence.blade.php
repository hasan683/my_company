

<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    td,th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

  </style>
</head>

<body>
 
<table>
  <tr>
    <th>id</th>
    <th>in_time</th>
    <th>out_time</th>
    <th>date</th>
    
  </tr>

  

  <style>
  .bg{
    background-color:red;
    border:1px solid red;
    color:white;
  }
  </style>

@foreach($employee_attendences as $employee_attenden)

<tr>
  <td>{{$employee_attenden->employee_id}}</td>
  <td>{{$employee_attenden->in_time}}</td>
  <td>{{$employee_attenden->out_time}}</td>
  <td>{{$employee_attenden->date}}</td>
</tr> 
  
@endforeach

</table>


</body>

</html>

