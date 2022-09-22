@extends('layouts.paperlayouts')

@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">รายการจอง</h4>
          </div>
          <div class="card-body">
            <div class="toolbar">
              <!--        Here you can write extra buttons/actions for the toolbar              -->
            </div>
            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>reference</th>
                    <th>services</th>
                    <th>วันที่จอง</th>
                    <th>เวลาจอง</th>
                    <th>slot</th>
                    <th>ชื่อ</th>
                    <th>เบอร์โทร</th>
                    <th>email</th>
                    <th>status</th>
                    <th class="disabled-sorting text-right">Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>ลำดับ</th>
                    <th>reference</th>
                    <th>services</th>
                    <th>วันที่จอง</th>
                    <th>เวลาจอง</th>
                    <th>slot</th>
                    <th>ชื่อ</th>
                    <th>เบอร์โทร</th>
                    <th>email</th>
                    <th>status</th>
                    <th class="disabled-sorting text-right">Actions</th>
                </tr>
              </tfoot>
              <tbody>
                @php
                    // "id" => 10
                    // "services" => "["HIV","PrEP","HepB","HepC"]"
                    // "reference" => "HXgsh2"
                    // "booking_date" => "2022-09-20"
                    // "booking_time_start" => "16:30"
                    // "booking_time_end" => null
                    // "booking_slot" => "30"
                    // "name" => "Note Overkill"
                    // "phone" => "0622652994"
                    // "email" => "notenanote0121@gmail.com"
                    // "status" => null
                    // "created_at" => "2022-09-20 16:03:37"
                    // "updated_at" => "2022-09-20 16:03:42"
                @endphp
                @foreach ($list_booking as $booking)

                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->reference }}</td>
                    <td>{{ $booking->services }}</td>
                    <td>{{ $booking->booking_date }}</td>
                    <td>{{ $booking->booking_time_start }}</td>
                    <td>{{ $booking->booking_slot }}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->phone }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->status }}</td>
                    <td class="disabled-sorting text-right">Actions</td>
                </tr>

                @endforeach
            </tbody>
            </table>
          </div><!-- end content-->
        </div><!--  end card  -->
      </div> <!-- end col-md-12 -->
    </div> <!-- end row -->
  </div>
@endsection
