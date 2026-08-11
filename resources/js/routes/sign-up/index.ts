import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../wayfinder'
/**
* @see \App\Http\Controllers\Auth\AuthController::submit
 * @see app/Http/Controllers/Auth/AuthController.php:78
 * @route '/sign-up'
 */
export const submit = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: submit.url(options),
    method: 'post',
})

submit.definition = {
    methods: ["post"],
    url: '/sign-up',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Auth\AuthController::submit
 * @see app/Http/Controllers/Auth/AuthController.php:78
 * @route '/sign-up'
 */
submit.url = (options?: RouteQueryOptions) => {
    return submit.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Auth\AuthController::submit
 * @see app/Http/Controllers/Auth/AuthController.php:78
 * @route '/sign-up'
 */
submit.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: submit.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Auth\AuthController::submit
 * @see app/Http/Controllers/Auth/AuthController.php:78
 * @route '/sign-up'
 */
    const submitForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: submit.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Auth\AuthController::submit
 * @see app/Http/Controllers/Auth/AuthController.php:78
 * @route '/sign-up'
 */
        submitForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: submit.url(options),
            method: 'post',
        })
    
    submit.form = submitForm
const signUp = {
    submit: Object.assign(submit, submit),
}

export default signUp