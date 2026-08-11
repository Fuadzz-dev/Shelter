import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../wayfinder'
import verifyOtpAd0e73 from './verify-otp'
import reset0fffd7 from './reset'
/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::lookup
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:30
 * @route '/lupa-password/lookup'
 */
export const lookup = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: lookup.url(options),
    method: 'post',
})

lookup.definition = {
    methods: ["post"],
    url: '/lupa-password/lookup',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::lookup
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:30
 * @route '/lupa-password/lookup'
 */
lookup.url = (options?: RouteQueryOptions) => {
    return lookup.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::lookup
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:30
 * @route '/lupa-password/lookup'
 */
lookup.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: lookup.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::lookup
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:30
 * @route '/lupa-password/lookup'
 */
    const lookupForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: lookup.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::lookup
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:30
 * @route '/lupa-password/lookup'
 */
        lookupForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: lookup.url(options),
            method: 'post',
        })
    
    lookup.form = lookupForm
/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::verifyEmail
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:73
 * @route '/lupa-password/verify-email'
 */
export const verifyEmail = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: verifyEmail.url(options),
    method: 'get',
})

verifyEmail.definition = {
    methods: ["get","head"],
    url: '/lupa-password/verify-email',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::verifyEmail
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:73
 * @route '/lupa-password/verify-email'
 */
verifyEmail.url = (options?: RouteQueryOptions) => {
    return verifyEmail.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::verifyEmail
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:73
 * @route '/lupa-password/verify-email'
 */
verifyEmail.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: verifyEmail.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::verifyEmail
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:73
 * @route '/lupa-password/verify-email'
 */
verifyEmail.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: verifyEmail.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::verifyEmail
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:73
 * @route '/lupa-password/verify-email'
 */
    const verifyEmailForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: verifyEmail.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::verifyEmail
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:73
 * @route '/lupa-password/verify-email'
 */
        verifyEmailForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: verifyEmail.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::verifyEmail
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:73
 * @route '/lupa-password/verify-email'
 */
        verifyEmailForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: verifyEmail.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    verifyEmail.form = verifyEmailForm
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
* @see \App\Http\Controllers\Auth\ForgotPasswordController::verifyOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:131
 * @route '/lupa-password/verify-otp'
 */
export const verifyOtp = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: verifyOtp.url(options),
    method: 'get',
})

verifyOtp.definition = {
    methods: ["get","head"],
    url: '/lupa-password/verify-otp',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::verifyOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:131
 * @route '/lupa-password/verify-otp'
 */
verifyOtp.url = (options?: RouteQueryOptions) => {
    return verifyOtp.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::verifyOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:131
 * @route '/lupa-password/verify-otp'
 */
verifyOtp.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: verifyOtp.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::verifyOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:131
 * @route '/lupa-password/verify-otp'
 */
verifyOtp.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: verifyOtp.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::verifyOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:131
 * @route '/lupa-password/verify-otp'
 */
    const verifyOtpForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: verifyOtp.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::verifyOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:131
 * @route '/lupa-password/verify-otp'
 */
        verifyOtpForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: verifyOtp.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::verifyOtp
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:131
 * @route '/lupa-password/verify-otp'
 */
        verifyOtpForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: verifyOtp.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    verifyOtp.form = verifyOtpForm
/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::reset
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:191
 * @route '/lupa-password/reset'
 */
export const reset = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: reset.url(options),
    method: 'get',
})

reset.definition = {
    methods: ["get","head"],
    url: '/lupa-password/reset',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::reset
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:191
 * @route '/lupa-password/reset'
 */
reset.url = (options?: RouteQueryOptions) => {
    return reset.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::reset
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:191
 * @route '/lupa-password/reset'
 */
reset.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: reset.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::reset
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:191
 * @route '/lupa-password/reset'
 */
reset.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: reset.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::reset
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:191
 * @route '/lupa-password/reset'
 */
    const resetForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: reset.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::reset
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:191
 * @route '/lupa-password/reset'
 */
        resetForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: reset.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::reset
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:191
 * @route '/lupa-password/reset'
 */
        resetForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: reset.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    reset.form = resetForm
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
const lupaPassword = {
    lookup: Object.assign(lookup, lookup),
verifyEmail: Object.assign(verifyEmail, verifyEmail),
sendOtp: Object.assign(sendOtp, sendOtp),
verifyOtp: Object.assign(verifyOtp, verifyOtpAd0e73),
reset: Object.assign(reset, reset0fffd7),
resendOtp: Object.assign(resendOtp, resendOtp),
}

export default lupaPassword