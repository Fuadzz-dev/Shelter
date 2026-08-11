import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../wayfinder'
/**
* @see \App\Http\Controllers\Auth\AuthController::submit
 * @see app/Http/Controllers/Auth/AuthController.php:31
 * @route '/sign-in'
 */
export const submit = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: submit.url(options),
    method: 'post',
})

submit.definition = {
    methods: ["post"],
    url: '/sign-in',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Auth\AuthController::submit
 * @see app/Http/Controllers/Auth/AuthController.php:31
 * @route '/sign-in'
 */
submit.url = (options?: RouteQueryOptions) => {
    return submit.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Auth\AuthController::submit
 * @see app/Http/Controllers/Auth/AuthController.php:31
 * @route '/sign-in'
 */
submit.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: submit.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Auth\AuthController::submit
 * @see app/Http/Controllers/Auth/AuthController.php:31
 * @route '/sign-in'
 */
    const submitForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: submit.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Auth\AuthController::submit
 * @see app/Http/Controllers/Auth/AuthController.php:31
 * @route '/sign-in'
 */
        submitForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: submit.url(options),
            method: 'post',
        })
    
    submit.form = submitForm
const signIn = {
    submit: Object.assign(submit, submit),
}

export default signIn