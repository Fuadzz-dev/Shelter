import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../wayfinder'
/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::submit
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:206
 * @route '/lupa-password/reset'
 */
export const submit = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: submit.url(options),
    method: 'post',
})

submit.definition = {
    methods: ["post"],
    url: '/lupa-password/reset',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::submit
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:206
 * @route '/lupa-password/reset'
 */
submit.url = (options?: RouteQueryOptions) => {
    return submit.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::submit
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:206
 * @route '/lupa-password/reset'
 */
submit.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: submit.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::submit
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:206
 * @route '/lupa-password/reset'
 */
    const submitForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: submit.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Auth\ForgotPasswordController::submit
 * @see app/Http/Controllers/Auth/ForgotPasswordController.php:206
 * @route '/lupa-password/reset'
 */
        submitForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: submit.url(options),
            method: 'post',
        })
    
    submit.form = submitForm
const reset = {
    submit: Object.assign(submit, submit),
}

export default reset