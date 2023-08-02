<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link
  href="https://fonts.googleapis.com/css?family=Rock+Salt"
  rel="stylesheet"
  type="text/css" />
    <style>
         /* spacing */
         

table {
  table-layout: ;
  width: 100%;
  border-collapse: collapse;
  border: 3px solid purple;
}



th,
td {
  padding: 30px;
}

    </style>
</head>
<body>
    <div class="container">

      <div class="topnav">
        <form action="{{url('search')}}" method='POST'>
          @csrf
          <input type="text" placeholder="Search.." name="search">
          <input type="submit">
        </form>
      </div>

        <a href="{{url('/addClient')}}">Add</a>

        <table>
            <caption>
              Clients Table
            </caption>
            <thead>
              <tr>
                <th scope="col">Name_ar</th>
                <th scope="col">Name_en</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">mobile</th>
                <th scope="col">Contry_Code</th>
              </tr>
            </thead>
            <tbody>

          
              @foreach ($clients as $client)
              <tr>
                    <td>{{ $client->name_ar }}</td>
                    <td>{{ $client->name_en }}</td>
                    <td>{{ $client->username }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->mobile }}</td>
                    
                    <td>{{ $client->country_code }}</td>
                  </tr >
                @endforeach

            </tbody>
            <tfoot>
              <tr>

                
              </tr>
            </tfoot>
            
                            @if (method_exists($clients,'links'))
                        
                            <div class="d-flex justify-content-center">
                              {!! $clients->links() !!}
                            </div>
                    
                            @endif
            
          </table>
          
        </div>

</body>
</html>