@extends('layouts.user')
@section('content')
    <main id="main" class="mb-5" style="margin-top: 100px">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Lembaga saya</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Daftar lembaga</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Profile</a>
                        </div>
                    </nav>
                    <div class="tab-content mt-4" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama Lembaga</th>
                                                    <th scope="col">Telp.</th>
                                                    <th scope="col">Alamat</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($data as $item)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->phone }}</td>
                                                    <td>{{ $item->address }}</td>
                                                    <td>{{ $item->status }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="container">
                                <form action="{{ route('institutionals.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                    <input type="hidden" name="active" value="{{ date('d-m-Y') }}">
                                    <input type="hidden" name="status" value="0">
                                    <!-- Name Field -->
                                    <div class="form-group col-sm-6">
                                        {!! Form::label('name', 'Name:') !!}
                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    </div>

                                    <!-- Phone Field -->
                                    <div class="form-group col-sm-6">
                                        {!! Form::label('phone', 'Phone:') !!}
                                        {!! Form::number('phone', null, ['class' => 'form-control']) !!}
                                    </div>

                                    <!-- Address Field -->
                                    <div class="form-group col-sm-12 col-lg-12">
                                        {!! Form::label('address', 'Address:') !!}
                                        {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
                                    </div>

                                    <!-- Npwp Field -->
                                    <div class="form-group col-sm-6">
                                        {!! Form::label('npwp', 'Npwp:') !!}
                                        {!! Form::text('npwp', null, ['class' => 'form-control']) !!}
                                    </div>

                                    <!-- File Field -->
                                    <div class="form-group col-sm-6">
                                        {!! Form::label('file', 'File:') !!}
                                        {!! Form::file('file') !!}
                                    </div>
                                    <div class="clearfix"></div>

                                    <!-- Active Field -->
                                    {{-- <div class="form-group col-sm-6">
                                        {!! Form::label('active', 'Active:') !!}
                                        {!! Form::text('active', null, ['class' => 'form-control','id'=>'active']) !!}
                                    </div> --}}

                                    @push('scripts')
                                        <script type="text/javascript">
                                            $('#active').datetimepicker({
                                                format: 'YYYY-MM-DD HH:mm:ss',
                                                useCurrent: true,
                                                sideBySide: true
                                            })
                                        </script>
                                    @endpush

                                    <!-- Status Field -->
                                    {{-- <div class="form-group col-sm-6">
                                        {!! Form::label('status', 'Status:') !!}
                                        {!! Form::select('status', , null, ['class' => 'form-control']) !!}
                                    </div> --}}

                                    <!-- Submit Field -->
                                    <div class="form-group col-sm-12">
                                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <form method="POST" id="editProfileForm" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label>Name:</label><span class="required">*</span>
                                                    <input type="text" name="name" id="pfName" class="form-control" value="{{ auth::user()->name }}" required autofocus tabindex="1">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email:</label><span class="required">*</span>
                                                    <input type="text" name="email" id="pfEmail" class="form-control" value="{{ auth::user()->email }}" required tabindex="3" readonly>
                                                </div>
                                                <div class="text-left">
                                                    <button type="submit" class="btn btn-primary" id="btnPrEditUpdate" data-loading-text="<span class='spinner-border spinner-border-sm'></span> Processing..." tabindex="5">Update</button>
                                                </div>
                                        </form>
                                    </div>
                                    <div class="col-6">
                                        <form method="POST" id='changePasswordForm'>
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                    {{csrf_field()}}
                                                <div class="row">
                                                    <div class="form-group col-sm-12">
                                                        <label>Current Password:</label><span
                                                                class="required confirm-pwd"></span><span class="required">*</span>
                                                        <div class="input-group">
                                                            <input class="form-control input-group__addon" id="pfCurrentPassword" type="password"
                                                                name="password_current" required>
                                                            <div class="input-group-append input-group__icon">
                                                                <span class="input-group-text changeType">
                                                                    <i class="icon-ban icons"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm-12">
                                                        <label>New Password:</label><span
                                                                class="required confirm-pwd"></span><span class="required">*</span>
                                                        <div class="input-group">
                                                            <input class="form-control input-group__addon" id="pfNewPassword" type="password"
                                                                name="password" required>
                                                            <div class="input-group-append input-group__icon">
                                                                <span class="input-group-text changeType">
                                                                    <i class="icon-ban icons"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm-12">
                                                        <label>Confirm Password:</label><span
                                                                class="required confirm-pwd"></span><span class="required">*</span>
                                                        <div class="input-group">
                                                            <input class="form-control input-group__addon" id="pfNewConfirmPassword" type="password"
                                                                name="password_confirmation" required>
                                                            <div class="input-group-append input-group__icon">
                                                                <span class="input-group-text changeType">
                                                                    <i class="icon-ban icons"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-primary" id="btnPrPasswordEditSave" data-loading-text="<span class='spinner-border spinner-border-sm'></span> Processing...">Update</button>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
