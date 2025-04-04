<x-blank title="Register">
    <div class="container mx-auto">
        <div class="max-w-md mx-auto mt-10">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-key w-32 h-32 md:w-48 md:h-48 text-primary dark:text-primary-dark mx-auto">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M16.555 3.843l3.602 3.602a2.877 2.877 0 0 1 0 4.069l-2.643 2.643a2.877 2.877 0 0 1 -4.069 0l-.301 -.301l-6.558 6.558a2 2 0 0 1 -1.239 .578l-.175 .008h-1.172a1 1 0 0 1 -.993 -.883l-.007 -.117v-1.172a2 2 0 0 1 .467 -1.284l.119 -.13l.414 -.414h2v-2h2v-2l2.144 -2.144l-.301 -.301a2.877 2.877 0 0 1 0 -4.069l2.643 -2.643a2.877 2.877 0 0 1 4.069 0z" />
                <path d="M15 9h.01" />
            </svg>

            <form action="{{ route('register.post') }}" method="POST">
                @csrf

                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Welcome</h2>
                        <p class="font-normal text-slate-300 dark:text-slate-700 text-sm">
                            Sign Up to continue
                        </p>
                    </div>
                    <div class="card-body">
                        <x-input name="name" label="Name" placeholder="Name" required></x-input>
                        <x-input type="email" name="email" label="Email" placeholder="Email Address" required></x-input>
                        <x-input type="password" name="password" label="Password" placeholder="Password" required></x-input>
                        <x-input type="password" name="password_confirmation" label="Password Confirmation" placeholder="Password Confirmation" required></x-input>

                        <div class="flex flex-row justify-between mt-4">
                            <div></div>
                            <div class="">
                                <a href="{{ route('resend.verification.email.post') }}" class="text-primary dark:text-primary-dark">Resend Email Verification</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="form-group">
                            <x-button type="submit" class="button-primary">Register</x-button>
                        </div>
                        <div class="form-group text-center">
                            <a href="{{ route('login') }}" class="text-primary dark:text-primary-dark">Login</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-blank>
