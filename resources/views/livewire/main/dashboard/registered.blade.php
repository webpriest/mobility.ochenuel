<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Latest SUMCOURSE Registration</h4>
                @if($users->isNotEmpty())
                <div class="table-responsive">
                    <table class="table table-centered mb-0">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 20px;">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                        <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                    </div>
                                </th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>E-mail/Phone</th>
                                <th>Address</th>
                                <th>Organisation</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="{{ $user->token }}">
                                        <label class="form-check-label" for="{{ $user->token }}">&nbsp;</label>
                                    </div>
                                </td>
                                <td>
                                    {{ $user->created_at->format('F d, Y') }}
                                </td>
                                <td>
                                    <a href="{{ route('manager.registration.show', $user) }}" class="text-body fw-bold">
                                        {{ $user->full_name }}<br>
                                        <small>{{ $user->token }}</small>
                                    </a>
                                </td>
                                <td>
                                    {{ $user->email }}<br>
                                    {{ $user->phone }}
                                </td>
                                <td>
                                    {{ $user->address }}<br>
                                    {{ $user->city }}, <strong>{{ $user->country->country }}</strong>
                                </td>
                                <td>
                                    {{ $user->organisation }}
                                </td>
                                
                                <td>
                                    <a href="{{ route('manager.registration.show', $user) }}" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                        Details
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                    <p class="alert alert-warning">No registered participant</p>
                @endif
            </div>
        </div>
    </div>
</div>