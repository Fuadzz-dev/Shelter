import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../wayfinder'
/**
* @see \App\Http\Controllers\Admin\AdminController::create
 * @see app/Http/Controllers/Admin/AdminController.php:23
 * @route '/admin/laporan-helpdesk/create'
 */
export const create = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: create.url(options),
    method: 'get',
})

create.definition = {
    methods: ["get","head"],
    url: '/admin/laporan-helpdesk/create',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::create
 * @see app/Http/Controllers/Admin/AdminController.php:23
 * @route '/admin/laporan-helpdesk/create'
 */
create.url = (options?: RouteQueryOptions) => {
    return create.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::create
 * @see app/Http/Controllers/Admin/AdminController.php:23
 * @route '/admin/laporan-helpdesk/create'
 */
create.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: create.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Admin\AdminController::create
 * @see app/Http/Controllers/Admin/AdminController.php:23
 * @route '/admin/laporan-helpdesk/create'
 */
create.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: create.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::create
 * @see app/Http/Controllers/Admin/AdminController.php:23
 * @route '/admin/laporan-helpdesk/create'
 */
    const createForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: create.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::create
 * @see app/Http/Controllers/Admin/AdminController.php:23
 * @route '/admin/laporan-helpdesk/create'
 */
        createForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: create.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Admin\AdminController::create
 * @see app/Http/Controllers/Admin/AdminController.php:23
 * @route '/admin/laporan-helpdesk/create'
 */
        createForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: create.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    create.form = createForm
/**
* @see \App\Http\Controllers\Admin\AdminController::store
 * @see app/Http/Controllers/Admin/AdminController.php:36
 * @route '/admin/laporan-helpdesk'
 */
export const store = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: store.url(options),
    method: 'post',
})

store.definition = {
    methods: ["post"],
    url: '/admin/laporan-helpdesk',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::store
 * @see app/Http/Controllers/Admin/AdminController.php:36
 * @route '/admin/laporan-helpdesk'
 */
store.url = (options?: RouteQueryOptions) => {
    return store.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::store
 * @see app/Http/Controllers/Admin/AdminController.php:36
 * @route '/admin/laporan-helpdesk'
 */
store.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: store.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::store
 * @see app/Http/Controllers/Admin/AdminController.php:36
 * @route '/admin/laporan-helpdesk'
 */
    const storeForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: store.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::store
 * @see app/Http/Controllers/Admin/AdminController.php:36
 * @route '/admin/laporan-helpdesk'
 */
        storeForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: store.url(options),
            method: 'post',
        })
    
    store.form = storeForm
const laporanHelpdesk = {
    create: Object.assign(create, create),
store: Object.assign(store, store),
}

export default laporanHelpdesk