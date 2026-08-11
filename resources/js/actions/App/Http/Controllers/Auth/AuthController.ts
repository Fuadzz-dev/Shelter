import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../../../wayfinder'
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
* @see \App\Http\Controllers\Auth\AuthController::showSignIn
 * @see app/Http/Controllers/Auth/AuthController.php:19
 * @route '/sign-in'
 */
export const showSignIn = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: showSignIn.url(options),
    method: 'get',
})

showSignIn.definition = {
    methods: ["get","head"],
    url: '/sign-in',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Auth\AuthController::showSignIn
 * @see app/Http/Controllers/Auth/AuthController.php:19
 * @route '/sign-in'
 */
showSignIn.url = (options?: RouteQueryOptions) => {
    return showSignIn.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Auth\AuthController::showSignIn
 * @see app/Http/Controllers/Auth/AuthController.php:19
 * @route '/sign-in'
 */
showSignIn.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: showSignIn.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Auth\AuthController::showSignIn
 * @see app/Http/Controllers/Auth/AuthController.php:19
 * @route '/sign-in'
 */
showSignIn.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: showSignIn.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Auth\AuthController::showSignIn
 * @see app/Http/Controllers/Auth/AuthController.php:19
 * @route '/sign-in'
 */
    const showSignInForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: showSignIn.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Auth\AuthController::showSignIn
 * @see app/Http/Controllers/Auth/AuthController.php:19
 * @route '/sign-in'
 */
        showSignInForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: showSignIn.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Auth\AuthController::showSignIn
 * @see app/Http/Controllers/Auth/AuthController.php:19
 * @route '/sign-in'
 */
        showSignInForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: showSignIn.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    showSignIn.form = showSignInForm
/**
* @see \App\Http\Controllers\Auth\AuthController::signIn
 * @see app/Http/Controllers/Auth/AuthController.php:31
 * @route '/sign-in'
 */
export const signIn = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: signIn.url(options),
    method: 'post',
})

signIn.definition = {
    methods: ["post"],
    url: '/sign-in',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Auth\AuthController::signIn
 * @see app/Http/Controllers/Auth/AuthController.php:31
 * @route '/sign-in'
 */
signIn.url = (options?: RouteQueryOptions) => {
    return signIn.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Auth\AuthController::signIn
 * @see app/Http/Controllers/Auth/AuthController.php:31
 * @route '/sign-in'
 */
signIn.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: signIn.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Auth\AuthController::signIn
 * @see app/Http/Controllers/Auth/AuthController.php:31
 * @route '/sign-in'
 */
    const signInForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: signIn.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Auth\AuthController::signIn
 * @see app/Http/Controllers/Auth/AuthController.php:31
 * @route '/sign-in'
 */
        signInForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: signIn.url(options),
            method: 'post',
        })
    
    signIn.form = signInForm
/**
* @see \App\Http\Controllers\Auth\AuthController::showSignUp
 * @see app/Http/Controllers/Auth/AuthController.php:66
 * @route '/sign-up'
 */
export const showSignUp = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: showSignUp.url(options),
    method: 'get',
})

showSignUp.definition = {
    methods: ["get","head"],
    url: '/sign-up',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Auth\AuthController::showSignUp
 * @see app/Http/Controllers/Auth/AuthController.php:66
 * @route '/sign-up'
 */
showSignUp.url = (options?: RouteQueryOptions) => {
    return showSignUp.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Auth\AuthController::showSignUp
 * @see app/Http/Controllers/Auth/AuthController.php:66
 * @route '/sign-up'
 */
showSignUp.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: showSignUp.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Auth\AuthController::showSignUp
 * @see app/Http/Controllers/Auth/AuthController.php:66
 * @route '/sign-up'
 */
showSignUp.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: showSignUp.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Auth\AuthController::showSignUp
 * @see app/Http/Controllers/Auth/AuthController.php:66
 * @route '/sign-up'
 */
    const showSignUpForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: showSignUp.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Auth\AuthController::showSignUp
 * @see app/Http/Controllers/Auth/AuthController.php:66
 * @route '/sign-up'
 */
        showSignUpForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: showSignUp.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Auth\AuthController::showSignUp
 * @see app/Http/Controllers/Auth/AuthController.php:66
 * @route '/sign-up'
 */
        showSignUpForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: showSignUp.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    showSignUp.form = showSignUpForm
/**
* @see \App\Http\Controllers\Auth\AuthController::signUp
 * @see app/Http/Controllers/Auth/AuthController.php:78
 * @route '/sign-up'
 */
export const signUp = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: signUp.url(options),
    method: 'post',
})

signUp.definition = {
    methods: ["post"],
    url: '/sign-up',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Auth\AuthController::signUp
 * @see app/Http/Controllers/Auth/AuthController.php:78
 * @route '/sign-up'
 */
signUp.url = (options?: RouteQueryOptions) => {
    return signUp.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Auth\AuthController::signUp
 * @see app/Http/Controllers/Auth/AuthController.php:78
 * @route '/sign-up'
 */
signUp.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: signUp.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Auth\AuthController::signUp
 * @see app/Http/Controllers/Auth/AuthController.php:78
 * @route '/sign-up'
 */
    const signUpForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: signUp.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Auth\AuthController::signUp
 * @see app/Http/Controllers/Auth/AuthController.php:78
 * @route '/sign-up'
 */
        signUpForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: signUp.url(options),
            method: 'post',
        })
    
    signUp.form = signUpForm
const AuthController = { logout, showSignIn, signIn, showSignUp, signUp }

export default AuthController