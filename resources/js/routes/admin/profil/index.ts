import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../wayfinder'
/**
* @see \App\Http\Controllers\Admin\AdminController::update
 * @see app/Http/Controllers/Admin/AdminController.php:500
 * @route '/admin/profil'
 */
export const update = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: update.url(options),
    method: 'post',
})

update.definition = {
    methods: ["post"],
    url: '/admin/profil',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::update
 * @see app/Http/Controllers/Admin/AdminController.php:500
 * @route '/admin/profil'
 */
update.url = (options?: RouteQueryOptions) => {
    return update.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::update
 * @see app/Http/Controllers/Admin/AdminController.php:500
 * @route '/admin/profil'
 */
update.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: update.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::update
 * @see app/Http/Controllers/Admin/AdminController.php:500
 * @route '/admin/profil'
 */
    const updateForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: update.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::update
 * @see app/Http/Controllers/Admin/AdminController.php:500
 * @route '/admin/profil'
 */
        updateForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: update.url(options),
            method: 'post',
        })
    
    update.form = updateForm
const profil = {
    update: Object.assign(update, update),
}

export default profil