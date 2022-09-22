<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <!-- Content here -->

        <table class="table my-4">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Reference</th>
                <th scope="col">Services</th>
                <th scope="col">Booking_date</th>
                <th scope="col">Booking_time_start</th>
                <th scope="col">Booking_slot</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">E-mail</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($list_booking as $list_booking)
                    <tr>
                        <td>{{$list_booking->id}}</td>
                        <td>{{$list_booking->reference}}</td>
                        <td>{{$list_booking->services}}</td>
                        <td>{{$list_booking->booking_date}}</td>
                        <td>{{$list_booking->booking_time_start}}</td>
                        <td>{{$list_booking->booking_slot}}</td>
                        <td>{{$list_booking->name}}</td>
                        <td>{{$list_booking->phone}}</td>
                        <td>{{$list_booking->email}}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>

      </div>


      <script src="{{url('https://code.jquery.com/jquery-3.3.1.slim.min.js')}}"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="{{url('https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js')}}"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="{{url('https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js')}}"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
