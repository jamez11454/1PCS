@extends ('layouts.app')
@section('content')
<div id="wrapper">
    <table id="customer-details">
        <tr>
            <td class="column1">First Name</td>
            <td>{{ $customer->first_name }}</td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td>{{ $customer->last_name }}</td>
        </tr>
        <tr>
            <td>Company</td>
            <td>{{ $customer->company }}</td>
        </tr>
        <tr>
            <td>Profession</td>
            <td>{{ $customer->profession }}</td>
        </tr>
        <tr>
            <td>Chapter Name</td>
            <td>{{ $customer->chapter_name }}</td>
        </tr>
        <tr>
            <td>Alt Phone Number</td>
            <td>{{ $customer->alt_phone_number }}</td>
        </tr>
        <tr>
            <td>Fax Number</td>
            <td>{{ $customer->fax_number }}</td>
        </tr>
        <tr>
            <td>Cell Number</td>
            <td>{{ $customer->cell_number }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $customer->email }}</td>
        </tr>
        <tr>
            <td>Website</td>
            <td>{{ $customer->website }}</td>
        </tr>
        <tr>
            <td>Address</td>
            <td>{{ $customer->address }}</td>
        </tr>
        <tr>
            <td>City</td>
            <td>{{ $customer->city }}</td>
        </tr>
        <tr>
            <td>State</td>
            <td>{{ $customer->state }}</td>
        </tr>
        <tr>
            <td>ZIP</td>
            <td>{{ $customer->zip }}</td>
        </tr>
        <tr>
            <td>Substitute</td>
            <td>{{ $customer->substitute }}</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
                @if ($customer->status === 1) Active
                @else Inactive @endif
            </td>
        </tr>
        <tr>
            <td>Join Date</td>
            <td>{{ $customer->join_date }}</td>
        </tr>
        <tr>
            <td>Renewal Date</td>
            <td>{{ $customer->renewal_date }}</td>
        </tr>
        <tr>
            <td>Sponsor</td>
            <td>{{ $customer->sponsor }}</td>
        </tr>
        <tr>
            <td><a id="custom-button" href="/customers"><span class="button is-link">Return</span></a></td>
        </table>
</div>
@endsection
