import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../wayfinder'
/**
* @see \Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::login
 * @see vendor/laravel/fortify/src/Http/Controllers/AuthenticatedSessionController.php:47
 * @route '/login'
 */
export const login = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: login.url(options),
    method: 'get',
})

login.definition = {
    methods: ["get","head"],
    url: '/login',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::login
 * @see vendor/laravel/fortify/src/Http/Controllers/AuthenticatedSessionController.php:47
 * @route '/login'
 */
login.url = (options?: RouteQueryOptions) => {
    return login.definition.url + queryParams(options)
}

/**
* @see \Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::login
 * @see vendor/laravel/fortify/src/Http/Controllers/AuthenticatedSessionController.php:47
 * @route '/login'
 */
login.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: login.url(options),
    method: 'get',
})
/**
* @see \Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::login
 * @see vendor/laravel/fortify/src/Http/Controllers/AuthenticatedSessionController.php:47
 * @route '/login'
 */
login.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: login.url(options),
    method: 'head',
})

    /**
* @see \Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::login
 * @see vendor/laravel/fortify/src/Http/Controllers/AuthenticatedSessionController.php:47
 * @route '/login'
 */
    const loginForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: login.url(options),
        method: 'get',
    })

            /**
* @see \Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::login
 * @see vendor/laravel/fortify/src/Http/Controllers/AuthenticatedSessionController.php:47
 * @route '/login'
 */
        loginForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: login.url(options),
            method: 'get',
        })
            /**
* @see \Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::login
 * @see vendor/laravel/fortify/src/Http/Controllers/AuthenticatedSessionController.php:47
 * @route '/login'
 */
        loginForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: login.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    login.form = loginForm
/**
* @see \App\Http\Controllers\Auth\AuthController::logout
 * @see app/Http/Controllers/Auth/AuthController.php:118
 * @route '/logout'
 */
export const logout = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: logout.url(options),
    method: 'post',
})

logout.definition = {
    methods: ["post"],
    url: '/logout',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Auth\AuthController::logout
 * @see app/Http/Controllers/Auth/AuthController.php:118
 * @route '/logout'
 */
logout.url = (options?: RouteQueryOptions) => {
    return logout.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Auth\AuthController::logout
 * @see app/Http/Controllers/Auth/AuthController.php:118
 * @route '/logout'
 */
logout.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: logout.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Auth\AuthController::logout
 * @see app/Http/Controllers/Auth/AuthController.php:118
 * @route '/logout'
 */
    const logoutForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: logout.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Auth\AuthController::logout
 * @see app/Http/Controllers/Auth/AuthController.php:118
 * @route '/logout'
 */
        logoutForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: logout.url(options),
            method: 'post',
        })
    
    logout.form = logoutForm
/**
* @see \Laravel\Fortify\Http\Controllers\RegisteredUserController::register
 * @see vendor/laravel/fortify/src/Http/Controllers/RegisteredUserController.php:41
 * @route '/register'
 */
export const register = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: register.url(options),
    method: 'get',
})

register.definition = {
    methods: ["get","head"],
    url: '/register',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \Laravel\Fortify\Http\Controllers\RegisteredUserController::register
 * @see vendor/laravel/fortify/src/Http/Controllers/RegisteredUserController.php:41
 * @route '/register'
 */
register.url = (options?: RouteQueryOptions) => {
    return register.definition.url + queryParams(options)
}

/**
* @see \Laravel\Fortify\Http\Controllers\RegisteredUserController::register
 * @see vendor/laravel/fortify/src/Http/Controllers/RegisteredUserController.php:41
 * @route '/register'
 */
register.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: register.url(options),
    method: 'get',
})
/**
* @see \Laravel\Fortify\Http\Controllers\RegisteredUserController::register
 * @see vendor/laravel/fortify/src/Http/Controllers/RegisteredUserController.php:41
 * @route '/register'
 */
register.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: register.url(options),
    method: 'head',
})

    /**
* @see \Laravel\Fortify\Http\Controllers\RegisteredUserController::register
 * @see vendor/laravel/fortify/src/Http/Controllers/RegisteredUserController.php:41
 * @route '/register'
 */
    const registerForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: register.url(options),
        method: 'get',
    })

            /**
* @see \Laravel\Fortify\Http\Controllers\RegisteredUserController::register
 * @see vendor/laravel/fortify/src/Http/Controllers/RegisteredUserController.php:41
 * @route '/register'
 */
        registerForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: register.url(options),
            method: 'get',
        })
            /**
* @see \Laravel\Fortify\Http\Controllers\RegisteredUserController::register
 * @see vendor/laravel/fortify/src/Http/Controllers/RegisteredUserController.php:41
 * @route '/register'
 */
        registerForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: register.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    register.form = registerForm
/**
* @see \App\Http\Controllers\Auth\AuthController::signIn
 * @see app/Http/Controllers/Auth/AuthController.php:19
 * @route '/sign-in'
 */
export const signIn = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: signIn.url(options),
    method: 'get',
})

signIn.definition = {
    methods: ["get","head"],
    url: '/sign-in',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Auth\AuthController::signIn
 * @see app/Http/Controllers/Auth/AuthController.php:19
 * @route '/sign-in'
 */
signIn.url = (options?: RouteQueryOptions) => {
    return signIn.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Auth\AuthController::signIn
 * @see app/Http/Controllers/Auth/AuthController.php:19
 * @route '/sign-in'
 */
signIn.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: signIn.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Auth\AuthController::signIn
 * @see app/Http/Controllers/Auth/AuthController.php:19
 * @route '/sign-in'
 */
signIn.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: signIn.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Auth\AuthController::signIn
 * @see app/Http/Controllers/Auth/AuthController.php:19
 * @route '/sign-in'
 */
    const signInForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: signIn.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Auth\AuthController::signIn
 * @see app/Http/Controllers/Auth/AuthController.php:19
 * @route '/sign-in'
 */
        signInForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: signIn.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Auth\AuthController::signIn
 * @see app/Http/Controllers/Auth/AuthController.php:19
 * @route '/sign-in'
 */
        signInForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: signIn.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    signIn.form = signInForm
/**
* @see \App\Http\Controllers\Auth\AuthController::signUp
 * @see app/Http/Controllers/Auth/AuthController.php:66
 * @route '/sign-up'
 */
export const signUp = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: signUp.url(options),
    method: 'get',
})

signUp.definition = {
    methods: ["get","head"],
    url: '/sign-up',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Auth\AuthController::signUp
 * @see app/Http/Controllers/Auth/AuthController.php:66
 * @route '/sign-up'
 */
signUp.url = (options?: RouteQueryOptions) => {
    return signUp.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Auth\AuthController::signUp
 * @see app/Http/Controllers/Auth/AuthController.php:66
 * @route '/sign-up'
 */
signUp.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: signUp.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Auth\AuthController::signUp
 * @see app/Http/Controllers/Auth/AuthController.php:66
 * @route '/sign-up'
 */
signUp.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: signUp.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Auth\AuthController::signUp
 * @see app/Http/Controllers/Auth/AuthController.php:66
 * @route '/sign-up'
 */
    const signUpForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: signUp.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Auth\AuthController::signUp
 * @see app/Http/Controllers/Auth/AuthController.php:66
 * @route '/sign-up'
 */
        signUpForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: signUp.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Auth\AuthController::signUp
 * @see app/Http/Controllers/Auth/AuthController.php:66
 * @route '/sign-up'
 */
        signUpForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: signUp.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    signUp.form = signUpForm
/**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/ketentuan-layanan'
 */
export const ketentuanLayanan = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: ketentuanLayanan.url(options),
    method: 'get',
})

ketentuanLayanan.definition = {
    methods: ["get","head"],
    url: '/ketentuan-layanan',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/ketentuan-layanan'
 */
ketentuanLayanan.url = (options?: RouteQueryOptions) => {
    return ketentuanLayanan.definition.url + queryParams(options)
}

/**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/ketentuan-layanan'
 */
ketentuanLayanan.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: ketentuanLayanan.url(options),
    method: 'get',
})
/**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/ketentuan-layanan'
 */
ketentuanLayanan.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: ketentuanLayanan.url(options),
    method: 'head',
})

    /**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/ketentuan-layanan'
 */
    const ketentuanLayananForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: ketentuanLayanan.url(options),
        method: 'get',
    })

            /**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/ketentuan-layanan'
 */
        ketentuanLayananForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: ketentuanLayanan.url(options),
            method: 'get',
        })
            /**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/ketentuan-layanan'
 */
        ketentuanLayananForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: ketentuanLayanan.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    ketentuanLayanan.form = ketentuanLayananForm
/**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/kebijakan-privasi'
 */
export const kebijakanPrivasi = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: kebijakanPrivasi.url(options),
    method: 'get',
})

kebijakanPrivasi.definition = {
    methods: ["get","head"],
    url: '/kebijakan-privasi',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/kebijakan-privasi'
 */
kebijakanPrivasi.url = (options?: RouteQueryOptions) => {
    return kebijakanPrivasi.definition.url + queryParams(options)
}

/**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/kebijakan-privasi'
 */
kebijakanPrivasi.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: kebijakanPrivasi.url(options),
    method: 'get',
})
/**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/kebijakan-privasi'
 */
kebijakanPrivasi.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: kebijakanPrivasi.url(options),
    method: 'head',
})

    /**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/kebijakan-privasi'
 */
    const kebijakanPrivasiForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: kebijakanPrivasi.url(options),
        method: 'get',
    })

            /**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/kebijakan-privasi'
 */
        kebijakanPrivasiForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: kebijakanPrivasi.url(options),
            method: 'get',
        })
            /**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/kebijakan-privasi'
 */
        kebijakanPrivasiForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: kebijakanPrivasi.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    kebijakanPrivasi.form = kebijakanPrivasiForm
/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::lupaPassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:22
 * @route '/lupa-password'
 */
export const lupaPassword = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: lupaPassword.url(options),
    method: 'get',
})

lupaPassword.definition = {
    methods: ["get","head"],
    url: '/lupa-password',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::lupaPassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:22
 * @route '/lupa-password'
 */
lupaPassword.url = (options?: RouteQueryOptions) => {
    return lupaPassword.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::lupaPassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:22
 * @route '/lupa-password'
 */
lupaPassword.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: lupaPassword.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::lupaPassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:22
 * @route '/lupa-password'
 */
lupaPassword.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: lupaPassword.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::lupaPassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:22
 * @route '/lupa-password'
 */
    const lupaPasswordForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: lupaPassword.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::lupaPassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:22
 * @route '/lupa-password'
 */
        lupaPasswordForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: lupaPassword.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::lupaPassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:22
 * @route '/lupa-password'
 */
        lupaPasswordForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: lupaPassword.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    lupaPassword.form = lupaPasswordForm
/**
* @see \App\Http\Controllers\VerifikasiTtdController::verifikasi
 * @see app/Http/Controllers/VerifikasiTtdController.php:14
 * @route '/verifikasi/{nomor}'
 */
export const verifikasi = (args: { nomor: string | number } | [nomor: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: verifikasi.url(args, options),
    method: 'get',
})

verifikasi.definition = {
    methods: ["get","head"],
    url: '/verifikasi/{nomor}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\VerifikasiTtdController::verifikasi
 * @see app/Http/Controllers/VerifikasiTtdController.php:14
 * @route '/verifikasi/{nomor}'
 */
verifikasi.url = (args: { nomor: string | number } | [nomor: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { nomor: args }
    }

    
    if (Array.isArray(args)) {
        args = {
                    nomor: args[0],
                }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
                        nomor: args.nomor,
                }

    return verifikasi.definition.url
            .replace('{nomor}', parsedArgs.nomor.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\VerifikasiTtdController::verifikasi
 * @see app/Http/Controllers/VerifikasiTtdController.php:14
 * @route '/verifikasi/{nomor}'
 */
verifikasi.get = (args: { nomor: string | number } | [nomor: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: verifikasi.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\VerifikasiTtdController::verifikasi
 * @see app/Http/Controllers/VerifikasiTtdController.php:14
 * @route '/verifikasi/{nomor}'
 */
verifikasi.head = (args: { nomor: string | number } | [nomor: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: verifikasi.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\VerifikasiTtdController::verifikasi
 * @see app/Http/Controllers/VerifikasiTtdController.php:14
 * @route '/verifikasi/{nomor}'
 */
    const verifikasiForm = (args: { nomor: string | number } | [nomor: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: verifikasi.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\VerifikasiTtdController::verifikasi
 * @see app/Http/Controllers/VerifikasiTtdController.php:14
 * @route '/verifikasi/{nomor}'
 */
        verifikasiForm.get = (args: { nomor: string | number } | [nomor: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: verifikasi.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\VerifikasiTtdController::verifikasi
 * @see app/Http/Controllers/VerifikasiTtdController.php:14
 * @route '/verifikasi/{nomor}'
 */
        verifikasiForm.head = (args: { nomor: string | number } | [nomor: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: verifikasi.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    verifikasi.form = verifikasiForm
/**
* @see \App\Http\Controllers\VerifikasiAdminController::verifikasiAdmin
 * @see app/Http/Controllers/VerifikasiAdminController.php:15
 * @route '/verifikasi-admin/{nomor}'
 */
export const verifikasiAdmin = (args: { nomor: string | number } | [nomor: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: verifikasiAdmin.url(args, options),
    method: 'get',
})

verifikasiAdmin.definition = {
    methods: ["get","head"],
    url: '/verifikasi-admin/{nomor}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\VerifikasiAdminController::verifikasiAdmin
 * @see app/Http/Controllers/VerifikasiAdminController.php:15
 * @route '/verifikasi-admin/{nomor}'
 */
verifikasiAdmin.url = (args: { nomor: string | number } | [nomor: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { nomor: args }
    }

    
    if (Array.isArray(args)) {
        args = {
                    nomor: args[0],
                }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
                        nomor: args.nomor,
                }

    return verifikasiAdmin.definition.url
            .replace('{nomor}', parsedArgs.nomor.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\VerifikasiAdminController::verifikasiAdmin
 * @see app/Http/Controllers/VerifikasiAdminController.php:15
 * @route '/verifikasi-admin/{nomor}'
 */
verifikasiAdmin.get = (args: { nomor: string | number } | [nomor: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: verifikasiAdmin.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\VerifikasiAdminController::verifikasiAdmin
 * @see app/Http/Controllers/VerifikasiAdminController.php:15
 * @route '/verifikasi-admin/{nomor}'
 */
verifikasiAdmin.head = (args: { nomor: string | number } | [nomor: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: verifikasiAdmin.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\VerifikasiAdminController::verifikasiAdmin
 * @see app/Http/Controllers/VerifikasiAdminController.php:15
 * @route '/verifikasi-admin/{nomor}'
 */
    const verifikasiAdminForm = (args: { nomor: string | number } | [nomor: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: verifikasiAdmin.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\VerifikasiAdminController::verifikasiAdmin
 * @see app/Http/Controllers/VerifikasiAdminController.php:15
 * @route '/verifikasi-admin/{nomor}'
 */
        verifikasiAdminForm.get = (args: { nomor: string | number } | [nomor: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: verifikasiAdmin.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\VerifikasiAdminController::verifikasiAdmin
 * @see app/Http/Controllers/VerifikasiAdminController.php:15
 * @route '/verifikasi-admin/{nomor}'
 */
        verifikasiAdminForm.head = (args: { nomor: string | number } | [nomor: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: verifikasiAdmin.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    verifikasiAdmin.form = verifikasiAdminForm