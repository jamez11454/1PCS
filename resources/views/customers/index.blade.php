@extends ('layouts.app')
@section('content')
<div id="wrapper">
    <table id="customer-list">
        <tr id="headings">
            <td>First Name</td>
            <td>Last Name</td>
            <td>Company</td>
            <td>Chapter Name</td>
            <td>View More</td>
        </tr>
        @foreach ($customers as $customer)
        <tr>
            <td>{{ $customer->first_name }}</td>
            <td>{{ $customer->last_name }}</td>
            <td>{{ $customer->company }}</td>
            <td>{{ $customer->chapter_name }}</td>
            <td><a href="/customers/{{ $customer->id }}">view more...</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
