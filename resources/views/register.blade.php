@include('layout.header')

    <main role="main" class="auth-view">

        @if(session()->has('message'))

            <div id="card-alert" class="card light-blue">

                <div class="notification card-content white-text">

                    <i class="notification-icon material-icons-outlined">notification_important</i>

                    <span>SUCCESS: {{session()->pull('message')}}</span>

                </div>

            </div>

        @endif

        @if ($errors->any())

            <div id="card-alert" class="card red lighten-1">

                <div class="notification card-content white-text">

                    <i class="notification-icon material-icons-outlined">notification_important</i>

                    <span>ERROR: Please review your details in the form below.</span>

                    <br>

                </div>

            </div>

        @endif



        <div class="auth-form-container">

            <div class="auth-form">

                <div class="col-12 text-center">

                    <h3>Register</h3>

                </div>

                <br>

                <div>

                    <form method="POST" action="{{ url('do_register') }}">

                        @csrf

                        <div class="row">

                            <div class="input-field col s12">

                                <i class="material-icons-outlined prefix">perm_identity</i>

                                <input id="first_name" name="first_name" type="text" value="{{ old('first_name') }}" autofocus>

                                <label for="first_name">First Name</label>

                                @if ($errors->has('first_name'))
                                    <p class="error">{{ $errors->first('first_name') }}</p>
                                @endif

                            </div>

                            <div class="input-field col s12">

                                <i class="material-icons-outlined prefix">people_outline</i>

                                <input id="last_name" name="last_name" type="text" value="{{ old('first_name') }}" >

                                <label for="last_name">Last Name</label>

                                @if ($errors->has('last_name'))
                                    <p class="error">{{ $errors->first('last_name') }}</p>
                                @endif

                            </div>

                            <div class="input-field col s12">

                                <i class="material-icons-outlined prefix">email</i>

                                <input id="email" name="email" type="email" value="{{ old('first_name') }}">

                                <label for="email">Email</label>

                                @if ($errors->has('email'))
                                    <p class="error">{{ $errors->first('email') }}</p>
                                @endif

                            </div>

                            <div class="input-field col s12">

                                <i class="material-icons-outlined prefix">phone</i>

                                <input id="phone" name="phone" type="text" value="{{ old('first_name') }}" >

                                <label for="phone">Phone</label>

                                @if ($errors->has('phone'))
                                    <p class="error">{{ $errors->first('phone') }}</p>
                                @endif

                            </div>

                            <div class="input-field col s12">

                                <i class="material-icons-outlined prefix">place</i>

                                <select name="county" >

                                    <option value="Antrim">Antrim</option>
                                    <option value="Armagh">Armagh</option>
                                    <option value="Carlow">Carlow</option>

                                    <option value="Cavan">Cavan</option>
                                    <option value="Clare">Clare</option>
                                    <option value="Cork">Cork</option>
                                    <option value="Derry">Derry</option>


                                    <option value="Donegal">Donegal</option>
                                    <option value="Down">Down</option>
                                    <option value="Dublin">Dublin</option>

                                    <option value="Fermanagh">Fermanagh</option>
                                    <option value="Galway">Galway</option>
                                    <option value="Kerry">Kerry</option>

                                    <option value="Kildare">Kildare</option>
                                    <option value="Kilkenny">Kilkenny</option>
                                    <option value="Laois">Laois</option>

                                    <option value="Leitrim">Leitrim</option>
                                    <option value="Limerick">Limerick</option>

                                    <option value="Longford">Longford</option>
                                    <option value="Louth">Louth</option>
                                    <option value="Mayo">Mayo</option>

                                    <option value="Meath">Meath</option>
                                    <option value="Monaghan">Monaghan</option>
                                    <option value="Offaly">Offaly</option>

                                    <option value="Roscommon">Roscommon</option>
                                    <option value="Sligo">Sligo</option>
                                    <option value="Tipperary">Tipperary</option>

                                    <option value="Tyrone">Tyrone</option>
                                    <option value="Waterford">Waterford</option>
                                    <option value="Westmeath">Westmeath</option>

                                    <option value="Wexford">Wexford</option>
                                    <option value="Wicklow">Wicklow</option>

                                </select>

                                <label>Select County</label>

                                @if ($errors->has('county'))
                                    <p class="error">{{ $errors->first('county') }}</p>
                                @endif

                            </div>

                            <div class="input-field col s12 checkbox">

                                <i class="material-icons-outlined prefix">directions_car</i>

                                <label>

                                    <input name="driving" type="checkbox" class="filled-in" checked="checked" />

                                    <span>Access to Car?</span>

                                </label>

                                @if ($errors->has('driving'))
                                    <p class="error">{{ $errors->first('driving') }}</p>
                                @endif

                            </div>

                        </div>

                        <div class="row center">

                            <button class="btn waves-effect waves-light" type="submit" name="action">

                                Register

                                <i class="material-icons right">send</i>

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </main>

@include('layout.footer')
