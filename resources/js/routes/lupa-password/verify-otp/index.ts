import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../wayfinder'
/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::submit
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:151
 * @route '/lupa-password/verify-otp'
 */
export const submit = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: submit.url(options),
    method: 'post',
})

submit.definition = {
    methods: ["post"],
    url: '/lupa-password/verify-otp',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::submit
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:151
 * @route '/lupa-password/verify-otp'
 */
submit.url = (options?: RouteQueryOptions) => {
    return submit.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::submit
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:151
 * @route '/lupa-password/verify-otp'
 */
submit.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: submit.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::submit
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:151
 * @route '/lupa-password/verify-otp'
 */
    const submitForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: submit.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::submit
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:151
 * @route '/lupa-password/verify-otp'
 */
        submitForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: submit.url(options),
            method: 'post',
        })
    
    submit.form = submitForm
const verifyOtp = {
    submit: Object.assign(submit, submit),
}

export default verifyOtp