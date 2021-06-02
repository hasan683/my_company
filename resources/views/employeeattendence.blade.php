

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
    <th>name</th>

    
  </tr>

  

  <style>
  .bg{
    background-color:red;
    border:1px solid red;
    color:white;
  }
  </style>

@foreach($employeeattendences as $employeeattenden)

<tr>
  <td>{{$employeeattenden->employee_id}}</td>
  <td>{{$employeeattenden->in_time}}</td>
  <td>{{$employeeattenden->out_time}}</td>
  <td>{{$employeeattenden->date}}</td>
  <td>{{$employeeattenden->employe->name}}</td>

</tr> 
  
@endforeach

</table>


</body>

</html>

