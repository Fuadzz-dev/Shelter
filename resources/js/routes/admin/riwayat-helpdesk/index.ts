import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../../wayfinder'
/**
* @see \App\Http\Controllers\Admin\AdminController::exportMethod
 * @see app/Http/Controllers/Admin/AdminController.php:279
 * @route '/admin/riwayat-helpdesk/export'
 */
export const exportMethod = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: exportMethod.url(options),
    method: 'get',
})

exportMethod.definition = {
    methods: ["get","head"],
    url: '/admin/riwayat-helpdesk/export',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::exportMethod
 * @see app/Http/Controllers/Admin/AdminController.php:279
 * @route '/admin/riwayat-helpdesk/export'
 */
exportMethod.url = (options?: RouteQueryOptions) => {
    return exportMethod.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::exportMethod
 * @see app/Http/Controllers/Admin/AdminController.php:279
 * @route '/admin/riwayat-helpdesk/export'
 */
exportMethod.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: exportMethod.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Admin\AdminController::exportMethod
 * @see app/Http/Controllers/Admin/AdminController.php:279
 * @route '/admin/riwayat-helpdesk/export'
 */
exportMethod.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: exportMethod.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::exportMethod
 * @see app/Http/Controllers/Admin/AdminController.php:279
 * @route '/admin/riwayat-helpdesk/export'
 */
    const exportMethodForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: exportMethod.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::exportMethod
 * @see app/Http/Controllers/Admin/AdminController.php:279
 * @route '/admin/riwayat-helpdesk/export'
 */
        exportMethodForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: exportMethod.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Admin\AdminController::exportMethod
 * @see app/Http/Controllers/Admin/AdminController.php:279
 * @route '/admin/riwayat-helpdesk/export'
 */
        exportMethodForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: exportMethod.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    exportMethod.form = exportMethodForm
/**
* @see \App\Http\Controllers\Admin\AdminController::detail
 * @see app/Http/Controllers/Admin/AdminController.php:239
 * @route '/admin/riwayat-helpdesk/{id}'
 */
export const detail = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: detail.url(args, options),
    method: 'get',
})

detail.definition = {
    methods: ["get","head"],
    url: '/admin/riwayat-helpdesk/{id}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::detail
 * @see app/Http/Controllers/Admin/AdminController.php:239
 * @route '/admin/riwayat-helpdesk/{id}'
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
 * @see app/Http/Controllers/Admin/AdminController.php:239
 * @route '/admin/riwayat-helpdesk/{id}'
 */
detail.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: detail.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Admin\AdminController::detail
 * @see app/Http/Controllers/Admin/AdminController.php:239
 * @route '/admin/riwayat-helpdesk/{id}'
 */
detail.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: detail.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::detail
 * @see app/Http/Controllers/Admin/AdminController.php:239
 * @route '/admin/riwayat-helpdesk/{id}'
 */
    const detailForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: detail.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::detail
 * @see app/Http/Controllers/Admin/AdminController.php:239
 * @route '/admin/riwayat-helpdesk/{id}'
 */
        detailForm.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: detail.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Admin\AdminController::detail
 * @see app/Http/Controllers/Admin/AdminController.php:239
 * @route '/admin/riwayat-helpdesk/{id}'
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
* @see \App\Http\Controllers\Admin\AdminController::statusValidasi
 * @see app/Http/Controllers/Admin/AdminController.php:208
 * @route '/admin/riwayat-helpdesk/{id}/status-validasi'
 */
export const statusValidasi = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: statusValidasi.url(args, options),
    method: 'post',
})

statusValidasi.definition = {
    methods: ["post"],
    url: '/admin/riwayat-helpdesk/{id}/status-validasi',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::statusValidasi
 * @see app/Http/Controllers/Admin/AdminController.php:208
 * @route '/admin/riwayat-helpdesk/{id}/status-validasi'
 */
statusValidasi.url = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions) => {
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

    return statusValidasi.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::statusValidasi
 * @see app/Http/Controllers/Admin/AdminController.php:208
 * @route '/admin/riwayat-helpdesk/{id}/status-validasi'
 */
statusValidasi.post = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: statusValidasi.url(args, options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::statusValidasi
 * @see app/Http/Controllers/Admin/AdminController.php:208
 * @route '/admin/riwayat-helpdesk/{id}/status-validasi'
 */
    const statusValidasiForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: statusValidasi.url(args, options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::statusValidasi
 * @see app/Http/Controllers/Admin/AdminController.php:208
 * @route '/admin/riwayat-helpdesk/{id}/status-validasi'
 */
        statusValidasiForm.post = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: statusValidasi.url(args, options),
            method: 'post',
        })
    
    statusValidasi.form = statusValidasiForm
/**
* @see \App\Http\Controllers\Admin\AdminController::download
 * @see app/Http/Controllers/Admin/AdminController.php:256
 * @route '/admin/riwayat-helpdesk/{id}/download'
 */
export const download = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: download.url(args, options),
    method: 'get',
})

download.definition = {
    methods: ["get","head"],
    url: '/admin/riwayat-helpdesk/{id}/download',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::download
 * @see app/Http/Controllers/Admin/AdminController.php:256
 * @route '/admin/riwayat-helpdesk/{id}/download'
 */
download.url = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions) => {
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

    return download.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::download
 * @see app/Http/Controllers/Admin/AdminController.php:256
 * @route '/admin/riwayat-helpdesk/{id}/download'
 */
download.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: download.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Admin\AdminController::download
 * @see app/Http/Controllers/Admin/AdminController.php:256
 * @route '/admin/riwayat-helpdesk/{id}/download'
 */
download.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: download.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::download
 * @see app/Http/Controllers/Admin/AdminController.php:256
 * @route '/admin/riwayat-helpdesk/{id}/download'
 */
    const downloadForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: download.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::download
 * @see app/Http/Controllers/Admin/AdminController.php:256
 * @route '/admin/riwayat-helpdesk/{id}/download'
 */
        downloadForm.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: download.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Admin\AdminController::download
 * @see app/Http/Controllers/Admin/AdminController.php:256
 * @route '/admin/riwayat-helpdesk/{id}/download'
 */
        downloadForm.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: download.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    download.form = downloadForm
const riwayatHelpdesk = {
    export: Object.assign(exportMethod, exportMethod),
detail: Object.assign(detail, detail),
statusValidasi: Object.assign(statusValidasi, statusValidasi),
download: Object.assign(download, download),
}

export default riwayatHelpdesk