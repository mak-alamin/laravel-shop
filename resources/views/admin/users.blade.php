@extends('layouts.admin.index')

@section('title', 'Users')

@section('page_title', 'Users List')

@section('content')
    <section class="users">
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>

            <tr>
                <td>Mak</td>
                <td>Mosh</td>
                <td>Sag</td>
            </tr>
            <tr>
                <td>Mak@tst.com</td>
                <td>Mosh@test.com</td>
                <td>Sag@test</td>
            </tr>
            <tr>
                <td>234324</td>
                <td>23434</td>
                <td>34234355</td>
            </tr>
        </table>
    </section>
@endsection
