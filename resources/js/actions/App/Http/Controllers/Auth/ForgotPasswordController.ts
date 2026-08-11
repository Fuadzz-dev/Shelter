import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../../../wayfinder'
/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showLupaPassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:22
 * @route '/lupa-password'
 */
export const showLupaPassword = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: showLupaPassword.url(options),
    method: 'get',
})

showLupaPassword.definition = {
    methods: ["get","head"],
    url: '/lupa-password',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showLupaPassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:22
 * @route '/lupa-password'
 */
showLupaPassword.url = (options?: RouteQueryOptions) => {
    return showLupaPassword.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showLupaPassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:22
 * @route '/lupa-password'
 */
showLupaPassword.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: showLupaPassword.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showLupaPassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:22
 * @route '/lupa-password'
 */
showLupaPassword.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: showLupaPassword.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showLupaPassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:22
 * @route '/lupa-password'
 */
    const showLupaPasswordForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: showLupaPassword.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showLupaPassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:22
 * @route '/lupa-password'
 */
        showLupaPasswordForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: showLupaPassword.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showLupaPassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:22
 * @route '/lupa-password'
 */
        showLupaPasswordForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: showLupaPassword.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    showLupaPassword.form = showLupaPasswordForm
/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::lookupUser
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:30
 * @route '/lupa-password/lookup'
 */
export const lookupUser = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: lookupUser.url(options),
    method: 'post',
})

lookupUser.definition = {
    methods: ["post"],
    url: '/lupa-password/lookup',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::lookupUser
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:30
 * @route '/lupa-password/lookup'
 */
lookupUser.url = (options?: RouteQueryOptions) => {
    return lookupUser.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::lookupUser
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:30
 * @route '/lupa-password/lookup'
 */
lookupUser.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: lookupUser.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::lookupUser
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:30
 * @route '/lupa-password/lookup'
 */
    const lookupUserForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: lookupUser.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::lookupUser
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:30
 * @route '/lupa-password/lookup'
 */
        lookupUserForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: lookupUser.url(options),
            method: 'post',
        })
    
    lookupUser.form = lookupUserForm
/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showVerifyEmail
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:73
 * @route '/lupa-password/verify-email'
 */
export const showVerifyEmail = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: showVerifyEmail.url(options),
    method: 'get',
})

showVerifyEmail.definition = {
    methods: ["get","head"],
    url: '/lupa-password/verify-email',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showVerifyEmail
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:73
 * @route '/lupa-password/verify-email'
 */
showVerifyEmail.url = (options?: RouteQueryOptions) => {
    return showVerifyEmail.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showVerifyEmail
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:73
 * @route '/lupa-password/verify-email'
 */
showVerifyEmail.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: showVerifyEmail.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showVerifyEmail
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:73
 * @route '/lupa-password/verify-email'
 */
showVerifyEmail.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: showVerifyEmail.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showVerifyEmail
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:73
 * @route '/lupa-password/verify-email'
 */
    const showVerifyEmailForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: showVerifyEmail.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showVerifyEmail
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:73
 * @route '/lupa-password/verify-email'
 */
        showVerifyEmailForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: showVerifyEmail.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showVerifyEmail
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:73
 * @route '/lupa-password/verify-email'
 */
        showVerifyEmailForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: showVerifyEmail.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    showVerifyEmail.form = showVerifyEmailForm
/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::sendOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:95
 * @route '/lupa-password/send-otp'
 */
export const sendOtp = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: sendOtp.url(options),
    method: 'post',
})

sendOtp.definition = {
    methods: ["post"],
    url: '/lupa-password/send-otp',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::sendOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:95
 * @route '/lupa-password/send-otp'
 */
sendOtp.url = (options?: RouteQueryOptions) => {
    return sendOtp.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::sendOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:95
 * @route '/lupa-password/send-otp'
 */
sendOtp.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: sendOtp.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::sendOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:95
 * @route '/lupa-password/send-otp'
 */
    const sendOtpForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: sendOtp.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::sendOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:95
 * @route '/lupa-password/send-otp'
 */
        sendOtpForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: sendOtp.url(options),
            method: 'post',
        })
    
    sendOtp.form = sendOtpForm
/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showVerifyOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:131
 * @route '/lupa-password/verify-otp'
 */
export const showVerifyOtp = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: showVerifyOtp.url(options),
    method: 'get',
})

showVerifyOtp.definition = {
    methods: ["get","head"],
    url: '/lupa-password/verify-otp',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showVerifyOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:131
 * @route '/lupa-password/verify-otp'
 */
showVerifyOtp.url = (options?: RouteQueryOptions) => {
    return showVerifyOtp.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showVerifyOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:131
 * @route '/lupa-password/verify-otp'
 */
showVerifyOtp.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: showVerifyOtp.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showVerifyOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:131
 * @route '/lupa-password/verify-otp'
 */
showVerifyOtp.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: showVerifyOtp.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showVerifyOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:131
 * @route '/lupa-password/verify-otp'
 */
    const showVerifyOtpForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: showVerifyOtp.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showVerifyOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:131
 * @route '/lupa-password/verify-otp'
 */
        showVerifyOtpForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: showVerifyOtp.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showVerifyOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:131
 * @route '/lupa-password/verify-otp'
 */
        showVerifyOtpForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: showVerifyOtp.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    showVerifyOtp.form = showVerifyOtpForm
/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::verifyOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:151
 * @route '/lupa-password/verify-otp'
 */
export const verifyOtp = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: verifyOtp.url(options),
    method: 'post',
})

verifyOtp.definition = {
    methods: ["post"],
    url: '/lupa-password/verify-otp',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::verifyOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:151
 * @route '/lupa-password/verify-otp'
 */
verifyOtp.url = (options?: RouteQueryOptions) => {
    return verifyOtp.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::verifyOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:151
 * @route '/lupa-password/verify-otp'
 */
verifyOtp.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: verifyOtp.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::verifyOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:151
 * @route '/lupa-password/verify-otp'
 */
    const verifyOtpForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: verifyOtp.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::verifyOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:151
 * @route '/lupa-password/verify-otp'
 */
        verifyOtpForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: verifyOtp.url(options),
            method: 'post',
        })
    
    verifyOtp.form = verifyOtpForm
/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showResetPassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:191
 * @route '/lupa-password/reset'
 */
export const showResetPassword = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: showResetPassword.url(options),
    method: 'get',
})

showResetPassword.definition = {
    methods: ["get","head"],
    url: '/lupa-password/reset',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showResetPassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:191
 * @route '/lupa-password/reset'
 */
showResetPassword.url = (options?: RouteQueryOptions) => {
    return showResetPassword.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showResetPassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:191
 * @route '/lupa-password/reset'
 */
showResetPassword.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: showResetPassword.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showResetPassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:191
 * @route '/lupa-password/reset'
 */
showResetPassword.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: showResetPassword.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showResetPassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:191
 * @route '/lupa-password/reset'
 */
    const showResetPasswordForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: showResetPassword.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showResetPassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:191
 * @route '/lupa-password/reset'
 */
        showResetPasswordForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: showResetPassword.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::showResetPassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:191
 * @route '/lupa-password/reset'
 */
        showResetPasswordForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: showResetPassword.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    showResetPassword.form = showResetPasswordForm
/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::updatePassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:206
 * @route '/lupa-password/reset'
 */
export const updatePassword = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: updatePassword.url(options),
    method: 'post',
})

updatePassword.definition = {
    methods: ["post"],
    url: '/lupa-password/reset',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::updatePassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:206
 * @route '/lupa-password/reset'
 */
updatePassword.url = (options?: RouteQueryOptions) => {
    return updatePassword.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::updatePassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:206
 * @route '/lupa-password/reset'
 */
updatePassword.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: updatePassword.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::updatePassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:206
 * @route '/lupa-password/reset'
 */
    const updatePasswordForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: updatePassword.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::updatePassword
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:206
 * @route '/lupa-password/reset'
 */
        updatePasswordForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: updatePassword.url(options),
            method: 'post',
        })
    
    updatePassword.form = updatePasswordForm
/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::resendOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:258
 * @route '/lupa-password/resend-otp'
 */
export const resendOtp = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: resendOtp.url(options),
    method: 'post',
})

resendOtp.definition = {
    methods: ["post"],
    url: '/lupa-password/resend-otp',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::resendOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:258
 * @route '/lupa-password/resend-otp'
 */
resendOtp.url = (options?: RouteQueryOptions) => {
    return resendOtp.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::resendOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:258
 * @route '/lupa-password/resend-otp'
 */
resendOtp.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: resendOtp.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::resendOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:258
 * @route '/lupa-password/resend-otp'
 */
    const resendOtpForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: resendOtp.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::resendOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:258
 * @route '/lupa-password/resend-otp'
 */
        resendOtpForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: resendOtp.url(options),
            method: 'post',
        })
    
    resendOtp.form = resendOtpForm
const ForgotPasswordController = { showLupaPassword, lookupUser, showVerifyEmail, sendOtp, showVerifyOtp, verifyOtp, showResetPassword, updatePassword, resendOtp }

export default ForgotPasswordController