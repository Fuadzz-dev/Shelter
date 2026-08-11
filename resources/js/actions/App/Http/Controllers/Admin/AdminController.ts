import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../../../../wayfinder'
/**
* @see \App\Http\Controllers\Admin\AdminController::helpdesk
 * @see app/Http/Controllers/Admin/AdminController.php:80
 * @route '/admin/helpdesk'
 */
export const helpdesk = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: helpdesk.url(options),
    method: 'get',
})

helpdesk.definition = {
    methods: ["get","head"],
    url: '/admin/helpdesk',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::helpdesk
 * @see app/Http/Controllers/Admin/AdminController.php:80
 * @route '/admin/helpdesk'
 */
helpdesk.url = (options?: RouteQueryOptions) => {
    return helpdesk.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::helpdesk
 * @see app/Http/Controllers/Admin/AdminController.php:80
 * @route '/admin/helpdesk'
 */
helpdesk.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: helpdesk.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Admin\AdminController::helpdesk
 * @see app/Http/Controllers/Admin/AdminController.php:80
 * @route '/admin/helpdesk'
 */
helpdesk.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: helpdesk.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::helpdesk
 * @see app/Http/Controllers/Admin/AdminController.php:80
 * @route '/admin/helpdesk'
 */
    const helpdeskForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: helpdesk.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::helpdesk
 * @see app/Http/Controllers/Admin/AdminController.php:80
 * @route '/admin/helpdesk'
 */
        helpdeskForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: helpdesk.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Admin\AdminController::helpdesk
 * @see app/Http/Controllers/Admin/AdminController.php:80
 * @route '/admin/helpdesk'
 */
        helpdeskForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: helpdesk.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    helpdesk.form = helpdeskForm
/**
* @see \App\Http\Controllers\Admin\AdminController::createLaporan
 * @see app/Http/Controllers/Admin/AdminController.php:23
 * @route '/admin/laporan-helpdesk/create'
 */
export const createLaporan = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: createLaporan.url(options),
    method: 'get',
})

createLaporan.definition = {
    methods: ["get","head"],
    url: '/admin/laporan-helpdesk/create',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::createLaporan
 * @see app/Http/Controllers/Admin/AdminController.php:23
 * @route '/admin/laporan-helpdesk/create'
 */
createLaporan.url = (options?: RouteQueryOptions) => {
    return createLaporan.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::createLaporan
 * @see app/Http/Controllers/Admin/AdminController.php:23
 * @route '/admin/laporan-helpdesk/create'
 */
createLaporan.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: createLaporan.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Admin\AdminController::createLaporan
 * @see app/Http/Controllers/Admin/AdminController.php:23
 * @route '/admin/laporan-helpdesk/create'
 */
createLaporan.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: createLaporan.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::createLaporan
 * @see app/Http/Controllers/Admin/AdminController.php:23
 * @route '/admin/laporan-helpdesk/create'
 */
    const createLaporanForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: createLaporan.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::createLaporan
 * @see app/Http/Controllers/Admin/AdminController.php:23
 * @route '/admin/laporan-helpdesk/create'
 */
        createLaporanForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: createLaporan.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Admin\AdminController::createLaporan
 * @see app/Http/Controllers/Admin/AdminController.php:23
 * @route '/admin/laporan-helpdesk/create'
 */
        createLaporanForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: createLaporan.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    createLaporan.form = createLaporanForm
/**
* @see \App\Http\Controllers\Admin\AdminController::storeLaporan
 * @see app/Http/Controllers/Admin/AdminController.php:36
 * @route '/admin/laporan-helpdesk'
 */
export const storeLaporan = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: storeLaporan.url(options),
    method: 'post',
})

storeLaporan.definition = {
    methods: ["post"],
    url: '/admin/laporan-helpdesk',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::storeLaporan
 * @see app/Http/Controllers/Admin/AdminController.php:36
 * @route '/admin/laporan-helpdesk'
 */
storeLaporan.url = (options?: RouteQueryOptions) => {
    return storeLaporan.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::storeLaporan
 * @see app/Http/Controllers/Admin/AdminController.php:36
 * @route '/admin/laporan-helpdesk'
 */
storeLaporan.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: storeLaporan.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::storeLaporan
 * @see app/Http/Controllers/Admin/AdminController.php:36
 * @route '/admin/laporan-helpdesk'
 */
    const storeLaporanForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: storeLaporan.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::storeLaporan
 * @see app/Http/Controllers/Admin/AdminController.php:36
 * @route '/admin/laporan-helpdesk'
 */
        storeLaporanForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: storeLaporan.url(options),
            method: 'post',
        })
    
    storeLaporan.form = storeLaporanForm
/**
* @see \App\Http\Controllers\Admin\AdminController::helpdeskDetail
 * @see app/Http/Controllers/Admin/AdminController.php:105
 * @route '/admin/helpdesk/{id}'
 */
export const helpdeskDetail = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: helpdeskDetail.url(args, options),
    method: 'get',
})

helpdeskDetail.definition = {
    methods: ["get","head"],
    url: '/admin/helpdesk/{id}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::helpdeskDetail
 * @see app/Http/Controllers/Admin/AdminController.php:105
 * @route '/admin/helpdesk/{id}'
 */
helpdeskDetail.url = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions) => {
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

    return helpdeskDetail.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::helpdeskDetail
 * @see app/Http/Controllers/Admin/AdminController.php:105
 * @route '/admin/helpdesk/{id}'
 */
helpdeskDetail.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: helpdeskDetail.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Admin\AdminController::helpdeskDetail
 * @see app/Http/Controllers/Admin/AdminController.php:105
 * @route '/admin/helpdesk/{id}'
 */
helpdeskDetail.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: helpdeskDetail.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::helpdeskDetail
 * @see app/Http/Controllers/Admin/AdminController.php:105
 * @route '/admin/helpdesk/{id}'
 */
    const helpdeskDetailForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: helpdeskDetail.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::helpdeskDetail
 * @see app/Http/Controllers/Admin/AdminController.php:105
 * @route '/admin/helpdesk/{id}'
 */
        helpdeskDetailForm.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: helpdeskDetail.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Admin\AdminController::helpdeskDetail
 * @see app/Http/Controllers/Admin/AdminController.php:105
 * @route '/admin/helpdesk/{id}'
 */
        helpdeskDetailForm.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: helpdeskDetail.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    helpdeskDetail.form = helpdeskDetailForm
/**
* @see \App\Http\Controllers\Admin\AdminController::storeLog
 * @see app/Http/Controllers/Admin/AdminController.php:551
 * @route '/admin/helpdesk/{id}/log'
 */
export const storeLog = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: storeLog.url(args, options),
    method: 'post',
})

storeLog.definition = {
    methods: ["post"],
    url: '/admin/helpdesk/{id}/log',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::storeLog
 * @see app/Http/Controllers/Admin/AdminController.php:551
 * @route '/admin/helpdesk/{id}/log'
 */
storeLog.url = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions) => {
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

    return storeLog.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::storeLog
 * @see app/Http/Controllers/Admin/AdminController.php:551
 * @route '/admin/helpdesk/{id}/log'
 */
storeLog.post = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: storeLog.url(args, options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::storeLog
 * @see app/Http/Controllers/Admin/AdminController.php:551
 * @route '/admin/helpdesk/{id}/log'
 */
    const storeLogForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: storeLog.url(args, options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::storeLog
 * @see app/Http/Controllers/Admin/AdminController.php:551
 * @route '/admin/helpdesk/{id}/log'
 */
        storeLogForm.post = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: storeLog.url(args, options),
            method: 'post',
        })
    
    storeLog.form = storeLogForm
/**
* @see \App\Http\Controllers\Admin\AdminController::manajemenPengguna
 * @see app/Http/Controllers/Admin/AdminController.php:122
 * @route '/admin/manajemen-pengguna'
 */
export const manajemenPengguna = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: manajemenPengguna.url(options),
    method: 'get',
})

manajemenPengguna.definition = {
    methods: ["get","head"],
    url: '/admin/manajemen-pengguna',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::manajemenPengguna
 * @see app/Http/Controllers/Admin/AdminController.php:122
 * @route '/admin/manajemen-pengguna'
 */
manajemenPengguna.url = (options?: RouteQueryOptions) => {
    return manajemenPengguna.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::manajemenPengguna
 * @see app/Http/Controllers/Admin/AdminController.php:122
 * @route '/admin/manajemen-pengguna'
 */
manajemenPengguna.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: manajemenPengguna.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Admin\AdminController::manajemenPengguna
 * @see app/Http/Controllers/Admin/AdminController.php:122
 * @route '/admin/manajemen-pengguna'
 */
manajemenPengguna.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: manajemenPengguna.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::manajemenPengguna
 * @see app/Http/Controllers/Admin/AdminController.php:122
 * @route '/admin/manajemen-pengguna'
 */
    const manajemenPenggunaForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: manajemenPengguna.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::manajemenPengguna
 * @see app/Http/Controllers/Admin/AdminController.php:122
 * @route '/admin/manajemen-pengguna'
 */
        manajemenPenggunaForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: manajemenPengguna.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Admin\AdminController::manajemenPengguna
 * @see app/Http/Controllers/Admin/AdminController.php:122
 * @route '/admin/manajemen-pengguna'
 */
        manajemenPenggunaForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: manajemenPengguna.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    manajemenPengguna.form = manajemenPenggunaForm
/**
* @see \App\Http\Controllers\Admin\AdminController::riwayatHelpdesk
 * @see app/Http/Controllers/Admin/AdminController.php:135
 * @route '/admin/riwayat-helpdesk'
 */
export const riwayatHelpdesk = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: riwayatHelpdesk.url(options),
    method: 'get',
})

riwayatHelpdesk.definition = {
    methods: ["get","head"],
    url: '/admin/riwayat-helpdesk',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::riwayatHelpdesk
 * @see app/Http/Controllers/Admin/AdminController.php:135
 * @route '/admin/riwayat-helpdesk'
 */
riwayatHelpdesk.url = (options?: RouteQueryOptions) => {
    return riwayatHelpdesk.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::riwayatHelpdesk
 * @see app/Http/Controllers/Admin/AdminController.php:135
 * @route '/admin/riwayat-helpdesk'
 */
riwayatHelpdesk.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: riwayatHelpdesk.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Admin\AdminController::riwayatHelpdesk
 * @see app/Http/Controllers/Admin/AdminController.php:135
 * @route '/admin/riwayat-helpdesk'
 */
riwayatHelpdesk.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: riwayatHelpdesk.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::riwayatHelpdesk
 * @see app/Http/Controllers/Admin/AdminController.php:135
 * @route '/admin/riwayat-helpdesk'
 */
    const riwayatHelpdeskForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: riwayatHelpdesk.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::riwayatHelpdesk
 * @see app/Http/Controllers/Admin/AdminController.php:135
 * @route '/admin/riwayat-helpdesk'
 */
        riwayatHelpdeskForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: riwayatHelpdesk.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Admin\AdminController::riwayatHelpdesk
 * @see app/Http/Controllers/Admin/AdminController.php:135
 * @route '/admin/riwayat-helpdesk'
 */
        riwayatHelpdeskForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: riwayatHelpdesk.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    riwayatHelpdesk.form = riwayatHelpdeskForm
/**
* @see \App\Http\Controllers\Admin\AdminController::exportRiwayatHelpdesk
 * @see app/Http/Controllers/Admin/AdminController.php:279
 * @route '/admin/riwayat-helpdesk/export'
 */
export const exportRiwayatHelpdesk = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: exportRiwayatHelpdesk.url(options),
    method: 'get',
})

exportRiwayatHelpdesk.definition = {
    methods: ["get","head"],
    url: '/admin/riwayat-helpdesk/export',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::exportRiwayatHelpdesk
 * @see app/Http/Controllers/Admin/AdminController.php:279
 * @route '/admin/riwayat-helpdesk/export'
 */
exportRiwayatHelpdesk.url = (options?: RouteQueryOptions) => {
    return exportRiwayatHelpdesk.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::exportRiwayatHelpdesk
 * @see app/Http/Controllers/Admin/AdminController.php:279
 * @route '/admin/riwayat-helpdesk/export'
 */
exportRiwayatHelpdesk.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: exportRiwayatHelpdesk.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Admin\AdminController::exportRiwayatHelpdesk
 * @see app/Http/Controllers/Admin/AdminController.php:279
 * @route '/admin/riwayat-helpdesk/export'
 */
exportRiwayatHelpdesk.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: exportRiwayatHelpdesk.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::exportRiwayatHelpdesk
 * @see app/Http/Controllers/Admin/AdminController.php:279
 * @route '/admin/riwayat-helpdesk/export'
 */
    const exportRiwayatHelpdeskForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: exportRiwayatHelpdesk.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::exportRiwayatHelpdesk
 * @see app/Http/Controllers/Admin/AdminController.php:279
 * @route '/admin/riwayat-helpdesk/export'
 */
        exportRiwayatHelpdeskForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: exportRiwayatHelpdesk.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Admin\AdminController::exportRiwayatHelpdesk
 * @see app/Http/Controllers/Admin/AdminController.php:279
 * @route '/admin/riwayat-helpdesk/export'
 */
        exportRiwayatHelpdeskForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: exportRiwayatHelpdesk.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    exportRiwayatHelpdesk.form = exportRiwayatHelpdeskForm
/**
* @see \App\Http\Controllers\Admin\AdminController::detailRiwayat
 * @see app/Http/Controllers/Admin/AdminController.php:239
 * @route '/admin/riwayat-helpdesk/{id}'
 */
export const detailRiwayat = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: detailRiwayat.url(args, options),
    method: 'get',
})

detailRiwayat.definition = {
    methods: ["get","head"],
    url: '/admin/riwayat-helpdesk/{id}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::detailRiwayat
 * @see app/Http/Controllers/Admin/AdminController.php:239
 * @route '/admin/riwayat-helpdesk/{id}'
 */
detailRiwayat.url = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions) => {
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

    return detailRiwayat.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::detailRiwayat
 * @see app/Http/Controllers/Admin/AdminController.php:239
 * @route '/admin/riwayat-helpdesk/{id}'
 */
detailRiwayat.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: detailRiwayat.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Admin\AdminController::detailRiwayat
 * @see app/Http/Controllers/Admin/AdminController.php:239
 * @route '/admin/riwayat-helpdesk/{id}'
 */
detailRiwayat.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: detailRiwayat.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::detailRiwayat
 * @see app/Http/Controllers/Admin/AdminController.php:239
 * @route '/admin/riwayat-helpdesk/{id}'
 */
    const detailRiwayatForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: detailRiwayat.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::detailRiwayat
 * @see app/Http/Controllers/Admin/AdminController.php:239
 * @route '/admin/riwayat-helpdesk/{id}'
 */
        detailRiwayatForm.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: detailRiwayat.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Admin\AdminController::detailRiwayat
 * @see app/Http/Controllers/Admin/AdminController.php:239
 * @route '/admin/riwayat-helpdesk/{id}'
 */
        detailRiwayatForm.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: detailRiwayat.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    detailRiwayat.form = detailRiwayatForm
/**
* @see \App\Http\Controllers\Admin\AdminController::updateStatusValidasi
 * @see app/Http/Controllers/Admin/AdminController.php:208
 * @route '/admin/riwayat-helpdesk/{id}/status-validasi'
 */
export const updateStatusValidasi = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: updateStatusValidasi.url(args, options),
    method: 'post',
})

updateStatusValidasi.definition = {
    methods: ["post"],
    url: '/admin/riwayat-helpdesk/{id}/status-validasi',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::updateStatusValidasi
 * @see app/Http/Controllers/Admin/AdminController.php:208
 * @route '/admin/riwayat-helpdesk/{id}/status-validasi'
 */
updateStatusValidasi.url = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions) => {
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

    return updateStatusValidasi.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::updateStatusValidasi
 * @see app/Http/Controllers/Admin/AdminController.php:208
 * @route '/admin/riwayat-helpdesk/{id}/status-validasi'
 */
updateStatusValidasi.post = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: updateStatusValidasi.url(args, options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::updateStatusValidasi
 * @see app/Http/Controllers/Admin/AdminController.php:208
 * @route '/admin/riwayat-helpdesk/{id}/status-validasi'
 */
    const updateStatusValidasiForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: updateStatusValidasi.url(args, options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::updateStatusValidasi
 * @see app/Http/Controllers/Admin/AdminController.php:208
 * @route '/admin/riwayat-helpdesk/{id}/status-validasi'
 */
        updateStatusValidasiForm.post = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: updateStatusValidasi.url(args, options),
            method: 'post',
        })
    
    updateStatusValidasi.form = updateStatusValidasiForm
/**
* @see \App\Http\Controllers\Admin\AdminController::downloadLaporan
 * @see app/Http/Controllers/Admin/AdminController.php:256
 * @route '/admin/riwayat-helpdesk/{id}/download'
 */
export const downloadLaporan = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: downloadLaporan.url(args, options),
    method: 'get',
})

downloadLaporan.definition = {
    methods: ["get","head"],
    url: '/admin/riwayat-helpdesk/{id}/download',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::downloadLaporan
 * @see app/Http/Controllers/Admin/AdminController.php:256
 * @route '/admin/riwayat-helpdesk/{id}/download'
 */
downloadLaporan.url = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions) => {
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

    return downloadLaporan.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::downloadLaporan
 * @see app/Http/Controllers/Admin/AdminController.php:256
 * @route '/admin/riwayat-helpdesk/{id}/download'
 */
downloadLaporan.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: downloadLaporan.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Admin\AdminController::downloadLaporan
 * @see app/Http/Controllers/Admin/AdminController.php:256
 * @route '/admin/riwayat-helpdesk/{id}/download'
 */
downloadLaporan.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: downloadLaporan.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::downloadLaporan
 * @see app/Http/Controllers/Admin/AdminController.php:256
 * @route '/admin/riwayat-helpdesk/{id}/download'
 */
    const downloadLaporanForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: downloadLaporan.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::downloadLaporan
 * @see app/Http/Controllers/Admin/AdminController.php:256
 * @route '/admin/riwayat-helpdesk/{id}/download'
 */
        downloadLaporanForm.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: downloadLaporan.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Admin\AdminController::downloadLaporan
 * @see app/Http/Controllers/Admin/AdminController.php:256
 * @route '/admin/riwayat-helpdesk/{id}/download'
 */
        downloadLaporanForm.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: downloadLaporan.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    downloadLaporan.form = downloadLaporanForm
/**
* @see \App\Http\Controllers\Admin\AdminController::profil
 * @see app/Http/Controllers/Admin/AdminController.php:490
 * @route '/admin/profil'
 */
export const profil = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: profil.url(options),
    method: 'get',
})

profil.definition = {
    methods: ["get","head"],
    url: '/admin/profil',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::profil
 * @see app/Http/Controllers/Admin/AdminController.php:490
 * @route '/admin/profil'
 */
profil.url = (options?: RouteQueryOptions) => {
    return profil.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::profil
 * @see app/Http/Controllers/Admin/AdminController.php:490
 * @route '/admin/profil'
 */
profil.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: profil.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Admin\AdminController::profil
 * @see app/Http/Controllers/Admin/AdminController.php:490
 * @route '/admin/profil'
 */
profil.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: profil.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::profil
 * @see app/Http/Controllers/Admin/AdminController.php:490
 * @route '/admin/profil'
 */
    const profilForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: profil.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::profil
 * @see app/Http/Controllers/Admin/AdminController.php:490
 * @route '/admin/profil'
 */
        profilForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: profil.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Admin\AdminController::profil
 * @see app/Http/Controllers/Admin/AdminController.php:490
 * @route '/admin/profil'
 */
        profilForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: profil.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    profil.form = profilForm
/**
* @see \App\Http\Controllers\Admin\AdminController::updateProfil
 * @see app/Http/Controllers/Admin/AdminController.php:500
 * @route '/admin/profil'
 */
export const updateProfil = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: updateProfil.url(options),
    method: 'post',
})

updateProfil.definition = {
    methods: ["post"],
    url: '/admin/profil',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::updateProfil
 * @see app/Http/Controllers/Admin/AdminController.php:500
 * @route '/admin/profil'
 */
updateProfil.url = (options?: RouteQueryOptions) => {
    return updateProfil.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::updateProfil
 * @see app/Http/Controllers/Admin/AdminController.php:500
 * @route '/admin/profil'
 */
updateProfil.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: updateProfil.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::updateProfil
 * @see app/Http/Controllers/Admin/AdminController.php:500
 * @route '/admin/profil'
 */
    const updateProfilForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: updateProfil.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::updateProfil
 * @see app/Http/Controllers/Admin/AdminController.php:500
 * @route '/admin/profil'
 */
        updateProfilForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: updateProfil.url(options),
            method: 'post',
        })
    
    updateProfil.form = updateProfilForm
/**
* @see \App\Http\Controllers\Admin\AdminController::storePengguna
 * @see app/Http/Controllers/Admin/AdminController.php:385
 * @route '/admin/manajemen-pengguna'
 */
export const storePengguna = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: storePengguna.url(options),
    method: 'post',
})

storePengguna.definition = {
    methods: ["post"],
    url: '/admin/manajemen-pengguna',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::storePengguna
 * @see app/Http/Controllers/Admin/AdminController.php:385
 * @route '/admin/manajemen-pengguna'
 */
storePengguna.url = (options?: RouteQueryOptions) => {
    return storePengguna.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::storePengguna
 * @see app/Http/Controllers/Admin/AdminController.php:385
 * @route '/admin/manajemen-pengguna'
 */
storePengguna.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: storePengguna.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::storePengguna
 * @see app/Http/Controllers/Admin/AdminController.php:385
 * @route '/admin/manajemen-pengguna'
 */
    const storePenggunaForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: storePengguna.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::storePengguna
 * @see app/Http/Controllers/Admin/AdminController.php:385
 * @route '/admin/manajemen-pengguna'
 */
        storePenggunaForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: storePengguna.url(options),
            method: 'post',
        })
    
    storePengguna.form = storePenggunaForm
/**
* @see \App\Http\Controllers\Admin\AdminController::updatePengguna
 * @see app/Http/Controllers/Admin/AdminController.php:424
 * @route '/admin/manajemen-pengguna/{id}'
 */
export const updatePengguna = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'put'> => ({
    url: updatePengguna.url(args, options),
    method: 'put',
})

updatePengguna.definition = {
    methods: ["put"],
    url: '/admin/manajemen-pengguna/{id}',
} satisfies RouteDefinition<["put"]>

/**
* @see \App\Http\Controllers\Admin\AdminController::updatePengguna
 * @see app/Http/Controllers/Admin/AdminController.php:424
 * @route '/admin/manajemen-pengguna/{id}'
 */
updatePengguna.url = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions) => {
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

    return updatePengguna.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Admin\AdminController::updatePengguna
 * @see app/Http/Controllers/Admin/AdminController.php:424
 * @route '/admin/manajemen-pengguna/{id}'
 */
updatePengguna.put = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'put'> => ({
    url: updatePengguna.url(args, options),
    method: 'put',
})

    /**
* @see \App\Http\Controllers\Admin\AdminController::updatePengguna
 * @see app/Http/Controllers/Admin/AdminController.php:424
 * @route '/admin/manajemen-pengguna/{id}'
 */
    const updatePenggunaForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: updatePengguna.url(args, {
                    [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                        _method: 'PUT',
                        ...(options?.query ?? options?.mergeQuery ?? {}),
                    }
                }),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Admin\AdminController::updatePengguna
 * @see app/Http/Controllers/Admin/AdminController.php:424
 * @route '/admin/manajemen-pengguna/{id}'
 */
        updatePenggunaForm.put = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: updatePengguna.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'PUT',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'post',
        })
    
    updatePengguna.form = updatePenggunaForm
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
const AdminController = { helpdesk, createLaporan, storeLaporan, helpdeskDetail, storeLog, manajemenPengguna, riwayatHelpdesk, exportRiwayatHelpdesk, detailRiwayat, updateStatusValidasi, downloadLaporan, profil, updateProfil, storePengguna, updatePengguna, toggleStatus, resetPassword }

export default AdminController