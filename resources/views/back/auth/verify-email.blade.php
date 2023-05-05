@section('title', 'back Login Page')

<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('back-assets') }}/" data-template="vertical-menu-template-free">
@include('back.partials.authHead')

<body>
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        @include('back.partials.authLogo')
                        <!-- /Logo -->
                        <h4 class="mb-2">Welcome to back verify Email! 👋</h4>
                        <p class="mb-4">Please sign-in to your account and start the adventure</p>
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <div class="mt-4 flex items-center justify-between">
                            <form method="POST" action="{{ route('back.verification.send') }}">
                                @csrf

                                <div>
                                    <x-primary-button>
                                        {{ __('Resend Verification Email') }}
                                    </x-primary-button>
                                </div>
                            </form>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    {{ __('back.Log Out') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>

    <!-- / Content -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    @include('back.partials.authScripts')
</body>

</html>
