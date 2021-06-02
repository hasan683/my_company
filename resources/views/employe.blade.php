

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
    <th>name</th>
    <th>phone</th>
    <th>address</th>
    <th>designation</th>
    <th>salary</th>
    <th>joining_date</th>
   
   
  </tr>

  

  <style>
  .bg{
    background-color:red;
    border:1px solid red;
    color:white;
  }
  </style>

@foreach($employes as $employ)

<tr>
  <td>{{$employ->id}}</td>
  <td>{{$employ->name}}</td>
  <td>{{$employ->phone}}</td>
  <td>{{$employ->address}}</td>
  <td>{{$employ->designation}}</td>
  <td>{{$employ->salary}}</td>
  <td>{{$employ->joining_date}}</td>
  <th><a class="btn btn-primary" href="{{ url('employeeattendence/' .$employ->id )}}"> attendence</a></th>
  <th><a class="btn btn-primary" href="{{ url('employeeattendence/' .$employ->id  )}}"> work</a></th>
  

</tr> 
  
@endforeach

</table>


</body>

</html>

