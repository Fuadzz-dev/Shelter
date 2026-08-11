import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../../wayfinder'
/**
* @see \App\Http\Controllers\Admin\AdminController::detail
 * @see app/Http/Controllers/Admin/AdminController.php:105
 * @route '/admin/helpdesk/{id}'
 */
export const detail = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: detail.url(args, options),
    method: 'get',
})

detail.definition = {
    methods: ["get","head"],
    url: '/admin/helpdesk/{id}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::detail
 * @see app/Http/Controllers/Admin/AdminController.php:105
 * @route '/admin/helpdesk/{id}'
 */
detail.url = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions) => {
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

    return detail.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::detail
 * @see app/Http/Controllers/Admin/AdminController.php:105
 * @route '/admin/helpdesk/{id}'
 */
detail.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: detail.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Admin\AdminController::detail
 * @see app/Http/Controllers/Admin/AdminController.php:105
 * @route '/admin/helpdesk/{id}'
 */
detail.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: detail.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::detail
 * @see app/Http/Controllers/Admin/AdminController.php:105
 * @route '/admin/helpdesk/{id}'
 */
    const detailForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: detail.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::detail
 * @see app/Http/Controllers/Admin/AdminController.php:105
 * @route '/admin/helpdesk/{id}'
 */
        detailForm.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: detail.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Admin\AdminController::detail
 * @see app/Http/Controllers/Admin/AdminController.php:105
 * @route '/admin/helpdesk/{id}'
 */
        detailForm.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: detail.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    detail.form = detailForm
/**
* @see \App\Http\Controllers\Admin\AdminController::log
 * @see app/Http/Controllers/Admin/AdminController.php:551
 * @route '/admin/helpdesk/{id}/log'
 */
export const log = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: log.url(args, options),
    method: 'post',
})

log.definition = {
    methods: ["post"],
    url: '/admin/helpdesk/{id}/log',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::log
 * @see app/Http/Controllers/Admin/AdminController.php:551
 * @route '/admin/helpdesk/{id}/log'
 */
log.url = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions) => {
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

    return log.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::log
 * @see app/Http/Controllers/Admin/AdminController.php:551
 * @route '/admin/helpdesk/{id}/log'
 */
log.post = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: log.url(args, options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::log
 * @see app/Http/Controllers/Admin/AdminController.php:551
 * @route '/admin/helpdesk/{id}/log'
 */
    const logForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: log.url(args, options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::log
 * @see app/Http/Controllers/Admin/AdminController.php:551
 * @route '/admin/helpdesk/{id}/log'
 */
        logForm.post = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: log.url(args, options),
            method: 'post',
        })
    
    log.form = logForm
const helpdesk = {
    detail: Object.assign(detail, detail),
log: Object.assign(log, log),
}

export default helpdesk