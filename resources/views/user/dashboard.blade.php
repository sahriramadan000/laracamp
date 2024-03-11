@extends('layouts.app')

@section('content')
<section class="dashboard my-5">
    <div class="container">
        <div class="row text-left">
            <div class=" col-lg-12 col-12 header-wrap mt-4">
                <p class="story">
                    DASHBOARD
                </p>
                <h2 class="primary-header ">
                    My Bootcamps
                </h2>
            </div>
        </div>
        <div class="row my-5">
            @include('components.alert')
            <table class="table">
                <tbody>
                    @forelse ($checkouts as $co)
                        <tr class="align-middle">
                            <td width="18%">
                                <img src="{{ asset('/images/item_bootcamp.png') }}" height="120" alt="">
                            </td>
                            <td>
                                <p class="mb-2">
                                    <strong>{{ $co->Camp->title }}</strong>
                                </p>
                                <p>
                                    {{ $co->created_at->format('M d, Y') }}
                                </p>
                            </td>
                            <td>
                                <strong>${{ $co->Camp->price }}k</strong>
                            </td>
                            <td>
                                <strong>{{ $co->payment_status }}</strong>
                            </td>
                            <td>
                                @if ($co->payment_status == 'waiting')
                                <a href="{{ $co->midtrans_url }}" class="btn btn-primary">Pay Here</a>
                                @endif
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">
                                    Contact Support
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">No Camp Registered</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
