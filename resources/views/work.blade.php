

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
    <th>working</th>
    <th>date</th>
    <th>employee_id</th>
    
    
  </tr>

  

  <style>
  .bg{
    background-color:red;
    border:1px solid red;
    color:white;
  }
  </style>

@foreach($works as $worker)

<tr>
  <td>{{$worker->id}}</td>
  <td>{{$worker->working}}</td>
  <td>{{$worker->date}}</td>
  <td>{{$worker->employee_id}}</td>
  <th><a class="btn btn-primary" href="{{ url('employeeattendence/' .$employ->id )}}"> work</a></th>
</tr> 
  
@endforeach

</table>


</body>

</html>

