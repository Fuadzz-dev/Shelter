import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../../wayfinder'
/**
* @see \App\Http\Controllers\Admin\AdminController::store
 * @see app/Http/Controllers/Admin/AdminController.php:385
 * @route '/admin/manajemen-pengguna'
 */
export const store = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: store.url(options),
    method: 'post',
})

store.definition = {
    methods: ["post"],
    url: '/admin/manajemen-pengguna',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::store
 * @see app/Http/Controllers/Admin/AdminController.php:385
 * @route '/admin/manajemen-pengguna'
 */
store.url = (options?: RouteQueryOptions) => {
    return store.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::store
 * @see app/Http/Controllers/Admin/AdminController.php:385
 * @route '/admin/manajemen-pengguna'
 */
store.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: store.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::store
 * @see app/Http/Controllers/Admin/AdminController.php:385
 * @route '/admin/manajemen-pengguna'
 */
    const storeForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: store.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::store
 * @see app/Http/Controllers/Admin/AdminController.php:385
 * @route '/admin/manajemen-pengguna'
 */
        storeForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: store.url(options),
            method: 'post',
        })
    
    store.form = storeForm
/**
* @see \App\Http\Controllers\Admin\AdminController::update
 * @see app/Http/Controllers/Admin/AdminController.php:424
 * @route '/admin/manajemen-pengguna/{id}'
 */
export const update = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'put'> => ({
    url: update.url(args, options),
    method: 'put',
})

update.definition = {
    methods: ["put"],
    url: '/admin/manajemen-pengguna/{id}',
} satisfies RouteDefinition<["put"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::update
 * @see app/Http/Controllers/Admin/AdminController.php:424
 * @route '/admin/manajemen-pengguna/{id}'
 */
update.url = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { id: args }
    }

    
    if (Array.isArray(args)) {
        args = {
                    id: args[0],
                }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
                        id: args.id,
                }

    return update.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::update
 * @see app/Http/Controllers/Admin/AdminController.php:424
 * @route '/admin/manajemen-pengguna/{id}'
 */
update.put = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'put'> => ({
    url: update.url(args, options),
    method: 'put',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::update
 * @see app/Http/Controllers/Admin/AdminController.php:424
 * @route '/admin/manajemen-pengguna/{id}'
 */
    const updateForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: update.url(args, {
                    [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                        _method: 'PUT',
                        ...(options?.query ?? options?.mergeQuery ?? {}),
                    }
                }),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::update
 * @see app/Http/Controllers/Admin/AdminController.php:424
 * @route '/admin/manajemen-pengguna/{id}'
 */
        updateForm.put = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: update.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'PUT',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'post',
        })
    
    update.form = updateForm
/**
* @see \App\Http\Controllers\Admin\AdminController::toggleStatus
 * @see app/Http/Controllers/Admin/AdminController.php:453
 * @route '/admin/manajemen-pengguna/{id}/status'
 */
export const toggleStatus = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'patch'> => ({
    url: toggleStatus.url(args, options),
    method: 'patch',
})

toggleStatus.definition = {
    methods: ["patch"],
    url: '/admin/manajemen-pengguna/{id}/status',
} satisfies RouteDefinition<["patch"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::toggleStatus
 * @see app/Http/Controllers/Admin/AdminController.php:453
 * @route '/admin/manajemen-pengguna/{id}/status'
 */
toggleStatus.url = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { id: args }
    }

    
    if (Array.isArray(args)) {
        args = {
                    id: args[0],
                }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
                        id: args.id,
                }

    return toggleStatus.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::toggleStatus
 * @see app/Http/Controllers/Admin/AdminController.php:453
 * @route '/admin/manajemen-pengguna/{id}/status'
 */
toggleStatus.patch = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'patch'> => ({
    url: toggleStatus.url(args, options),
    method: 'patch',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::toggleStatus
 * @see app/Http/Controllers/Admin/AdminController.php:453
 * @route '/admin/manajemen-pengguna/{id}/status'
 */
    const toggleStatusForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: toggleStatus.url(args, {
                    [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                        _method: 'PATCH',
                        ...(options?.query ?? options?.mergeQuery ?? {}),
                    }
                }),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::toggleStatus
 * @see app/Http/Controllers/Admin/AdminController.php:453
 * @route '/admin/manajemen-pengguna/{id}/status'
 */
        toggleStatusForm.patch = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: toggleStatus.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'PATCH',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'post',
        })
    
    toggleStatus.form = toggleStatusForm
/**
* @see \App\Http\Controllers\Admin\AdminController::resetPassword
 * @see app/Http/Controllers/Admin/AdminController.php:474
 * @route '/admin/manajemen-pengguna/{id}/reset-password'
 */
export const resetPassword = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: resetPassword.url(args, options),
    method: 'post',
})

resetPassword.definition = {
    methods: ["post"],
    url: '/admin/manajemen-pengguna/{id}/reset-password',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::resetPassword
 * @see app/Http/Controllers/Admin/AdminController.php:474
 * @route '/admin/manajemen-pengguna/{id}/reset-password'
 */
resetPassword.url = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { id: args }
    }

    
    if (Array.isArray(args)) {
        args = {
                    id: args[0],
                }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
                        id: args.id,
                }

    return resetPassword.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::resetPassword
 * @see app/Http/Controllers/Admin/AdminController.php:474
 * @route '/admin/manajemen-pengguna/{id}/reset-password'
 */
resetPassword.post = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: resetPassword.url(args, options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::resetPassword
 * @see app/Http/Controllers/Admin/AdminController.php:474
 * @route '/admin/manajemen-pengguna/{id}/reset-password'
 */
    const resetPasswordForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: resetPassword.url(args, options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::resetPassword
 * @see app/Http/Controllers/Admin/AdminController.php:474
 * @route '/admin/manajemen-pengguna/{id}/reset-password'
 */
        resetPasswordForm.post = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: resetPassword.url(args, options),
            method: 'post',
        })
    
    resetPassword.form = resetPasswordForm
const manajemenPengguna = {
    store: Object.assign(store, store),
update: Object.assign(update, update),
toggleStatus: Object.assign(toggleStatus, toggleStatus),
resetPassword: Object.assign(resetPassword, resetPassword),
}

export default manajemenPengguna