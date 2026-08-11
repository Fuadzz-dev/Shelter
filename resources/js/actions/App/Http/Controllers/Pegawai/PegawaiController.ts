import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../../../../wayfinder'
/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::dashboard
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:19
 * @route '/pegawai/dashboard'
 */
export const dashboard = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: dashboard.url(options),
    method: 'get',
})

dashboard.definition = {
    methods: ["get","head"],
    url: '/pegawai/dashboard',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::dashboard
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:19
 * @route '/pegawai/dashboard'
 */
dashboard.url = (options?: RouteQueryOptions) => {
    return dashboard.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::dashboard
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:19
 * @route '/pegawai/dashboard'
 */
dashboard.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: dashboard.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::dashboard
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:19
 * @route '/pegawai/dashboard'
 */
dashboard.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: dashboard.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::dashboard
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:19
 * @route '/pegawai/dashboard'
 */
    const dashboardForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: dashboard.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::dashboard
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:19
 * @route '/pegawai/dashboard'
 */
        dashboardForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: dashboard.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::dashboard
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:19
 * @route '/pegawai/dashboard'
 */
        dashboardForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: dashboard.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    dashboard.form = dashboardForm
/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::laporanHelpdesk
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:37
 * @route '/pegawai/laporan-helpdesk'
 */
export const laporanHelpdesk = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: laporanHelpdesk.url(options),
    method: 'get',
})

laporanHelpdesk.definition = {
    methods: ["get","head"],
    url: '/pegawai/laporan-helpdesk',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::laporanHelpdesk
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:37
 * @route '/pegawai/laporan-helpdesk'
 */
laporanHelpdesk.url = (options?: RouteQueryOptions) => {
    return laporanHelpdesk.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::laporanHelpdesk
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:37
 * @route '/pegawai/laporan-helpdesk'
 */
laporanHelpdesk.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: laporanHelpdesk.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::laporanHelpdesk
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:37
 * @route '/pegawai/laporan-helpdesk'
 */
laporanHelpdesk.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: laporanHelpdesk.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::laporanHelpdesk
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:37
 * @route '/pegawai/laporan-helpdesk'
 */
    const laporanHelpdeskForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: laporanHelpdesk.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::laporanHelpdesk
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:37
 * @route '/pegawai/laporan-helpdesk'
 */
        laporanHelpdeskForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: laporanHelpdesk.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::laporanHelpdesk
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:37
 * @route '/pegawai/laporan-helpdesk'
 */
        laporanHelpdeskForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: laporanHelpdesk.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    laporanHelpdesk.form = laporanHelpdeskForm
/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::createLaporan
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:69
 * @route '/pegawai/laporan-helpdesk/create'
 */
export const createLaporan = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: createLaporan.url(options),
    method: 'get',
})

createLaporan.definition = {
    methods: ["get","head"],
    url: '/pegawai/laporan-helpdesk/create',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::createLaporan
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:69
 * @route '/pegawai/laporan-helpdesk/create'
 */
createLaporan.url = (options?: RouteQueryOptions) => {
    return createLaporan.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::createLaporan
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:69
 * @route '/pegawai/laporan-helpdesk/create'
 */
createLaporan.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: createLaporan.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::createLaporan
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:69
 * @route '/pegawai/laporan-helpdesk/create'
 */
createLaporan.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: createLaporan.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::createLaporan
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:69
 * @route '/pegawai/laporan-helpdesk/create'
 */
    const createLaporanForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: createLaporan.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::createLaporan
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:69
 * @route '/pegawai/laporan-helpdesk/create'
 */
        createLaporanForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: createLaporan.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::createLaporan
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:69
 * @route '/pegawai/laporan-helpdesk/create'
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
* @see \App\Http\Controllers\Pegawai\PegawaiController::storeLaporan
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:79
 * @route '/pegawai/laporan-helpdesk'
 */
export const storeLaporan = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: storeLaporan.url(options),
    method: 'post',
})

storeLaporan.definition = {
    methods: ["post"],
    url: '/pegawai/laporan-helpdesk',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::storeLaporan
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:79
 * @route '/pegawai/laporan-helpdesk'
 */
storeLaporan.url = (options?: RouteQueryOptions) => {
    return storeLaporan.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::storeLaporan
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:79
 * @route '/pegawai/laporan-helpdesk'
 */
storeLaporan.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: storeLaporan.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::storeLaporan
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:79
 * @route '/pegawai/laporan-helpdesk'
 */
    const storeLaporanForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: storeLaporan.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::storeLaporan
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:79
 * @route '/pegawai/laporan-helpdesk'
 */
        storeLaporanForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: storeLaporan.url(options),
            method: 'post',
        })
    
    storeLaporan.form = storeLaporanForm
/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::detailLaporan
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:121
 * @route '/pegawai/laporan-helpdesk/{id}'
 */
export const detailLaporan = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: detailLaporan.url(args, options),
    method: 'get',
})

detailLaporan.definition = {
    methods: ["get","head"],
    url: '/pegawai/laporan-helpdesk/{id}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::detailLaporan
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:121
 * @route '/pegawai/laporan-helpdesk/{id}'
 */
detailLaporan.url = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions) => {
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

    return detailLaporan.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::detailLaporan
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:121
 * @route '/pegawai/laporan-helpdesk/{id}'
 */
detailLaporan.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: detailLaporan.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::detailLaporan
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:121
 * @route '/pegawai/laporan-helpdesk/{id}'
 */
detailLaporan.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: detailLaporan.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::detailLaporan
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:121
 * @route '/pegawai/laporan-helpdesk/{id}'
 */
    const detailLaporanForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: detailLaporan.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::detailLaporan
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:121
 * @route '/pegawai/laporan-helpdesk/{id}'
 */
        detailLaporanForm.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: detailLaporan.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::detailLaporan
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:121
 * @route '/pegawai/laporan-helpdesk/{id}'
 */
        detailLaporanForm.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: detailLaporan.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    detailLaporan.form = detailLaporanForm
/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::validasiDigital
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:141
 * @route '/pegawai/laporan-helpdesk/{id}/validasi-digital'
 */
export const validasiDigital = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: validasiDigital.url(args, options),
    method: 'get',
})

validasiDigital.definition = {
    methods: ["get","head"],
    url: '/pegawai/laporan-helpdesk/{id}/validasi-digital',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::validasiDigital
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:141
 * @route '/pegawai/laporan-helpdesk/{id}/validasi-digital'
 */
validasiDigital.url = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions) => {
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

    return validasiDigital.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::validasiDigital
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:141
 * @route '/pegawai/laporan-helpdesk/{id}/validasi-digital'
 */
validasiDigital.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: validasiDigital.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::validasiDigital
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:141
 * @route '/pegawai/laporan-helpdesk/{id}/validasi-digital'
 */
validasiDigital.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: validasiDigital.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::validasiDigital
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:141
 * @route '/pegawai/laporan-helpdesk/{id}/validasi-digital'
 */
    const validasiDigitalForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: validasiDigital.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::validasiDigital
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:141
 * @route '/pegawai/laporan-helpdesk/{id}/validasi-digital'
 */
        validasiDigitalForm.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: validasiDigital.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::validasiDigital
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:141
 * @route '/pegawai/laporan-helpdesk/{id}/validasi-digital'
 */
        validasiDigitalForm.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: validasiDigital.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    validasiDigital.form = validasiDigitalForm
/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::validasiSelesai
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:157
 * @route '/pegawai/laporan-helpdesk/{id}/validasi-selesai'
 */
export const validasiSelesai = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: validasiSelesai.url(args, options),
    method: 'post',
})

validasiSelesai.definition = {
    methods: ["post"],
    url: '/pegawai/laporan-helpdesk/{id}/validasi-selesai',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::validasiSelesai
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:157
 * @route '/pegawai/laporan-helpdesk/{id}/validasi-selesai'
 */
validasiSelesai.url = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions) => {
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

    return validasiSelesai.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::validasiSelesai
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:157
 * @route '/pegawai/laporan-helpdesk/{id}/validasi-selesai'
 */
validasiSelesai.post = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: validasiSelesai.url(args, options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::validasiSelesai
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:157
 * @route '/pegawai/laporan-helpdesk/{id}/validasi-selesai'
 */
    const validasiSelesaiForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: validasiSelesai.url(args, options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::validasiSelesai
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:157
 * @route '/pegawai/laporan-helpdesk/{id}/validasi-selesai'
 */
        validasiSelesaiForm.post = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: validasiSelesai.url(args, options),
            method: 'post',
        })
    
    validasiSelesai.form = validasiSelesaiForm
/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::belumSelesai
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:190
 * @route '/pegawai/laporan-helpdesk/{id}/belum-selesai'
 */
export const belumSelesai = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: belumSelesai.url(args, options),
    method: 'post',
})

belumSelesai.definition = {
    methods: ["post"],
    url: '/pegawai/laporan-helpdesk/{id}/belum-selesai',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::belumSelesai
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:190
 * @route '/pegawai/laporan-helpdesk/{id}/belum-selesai'
 */
belumSelesai.url = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions) => {
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

    return belumSelesai.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::belumSelesai
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:190
 * @route '/pegawai/laporan-helpdesk/{id}/belum-selesai'
 */
belumSelesai.post = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: belumSelesai.url(args, options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::belumSelesai
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:190
 * @route '/pegawai/laporan-helpdesk/{id}/belum-selesai'
 */
    const belumSelesaiForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: belumSelesai.url(args, options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::belumSelesai
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:190
 * @route '/pegawai/laporan-helpdesk/{id}/belum-selesai'
 */
        belumSelesaiForm.post = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: belumSelesai.url(args, options),
            method: 'post',
        })
    
    belumSelesai.form = belumSelesaiForm
/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::profil
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:234
 * @route '/pegawai/profil'
 */
export const profil = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: profil.url(options),
    method: 'get',
})

profil.definition = {
    methods: ["get","head"],
    url: '/pegawai/profil',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::profil
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:234
 * @route '/pegawai/profil'
 */
profil.url = (options?: RouteQueryOptions) => {
    return profil.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::profil
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:234
 * @route '/pegawai/profil'
 */
profil.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: profil.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::profil
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:234
 * @route '/pegawai/profil'
 */
profil.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: profil.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::profil
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:234
 * @route '/pegawai/profil'
 */
    const profilForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: profil.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::profil
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:234
 * @route '/pegawai/profil'
 */
        profilForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: profil.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::profil
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:234
 * @route '/pegawai/profil'
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
* @see \App\Http\Controllers\Pegawai\PegawaiController::updateProfil
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:244
 * @route '/pegawai/profil'
 */
export const updateProfil = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: updateProfil.url(options),
    method: 'post',
})

updateProfil.definition = {
    methods: ["post"],
    url: '/pegawai/profil',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::updateProfil
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:244
 * @route '/pegawai/profil'
 */
updateProfil.url = (options?: RouteQueryOptions) => {
    return updateProfil.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::updateProfil
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:244
 * @route '/pegawai/profil'
 */
updateProfil.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: updateProfil.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::updateProfil
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:244
 * @route '/pegawai/profil'
 */
    const updateProfilForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: updateProfil.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::updateProfil
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:244
 * @route '/pegawai/profil'
 */
        updateProfilForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: updateProfil.url(options),
            method: 'post',
        })
    
    updateProfil.form = updateProfilForm
const PegawaiController = { dashboard, laporanHelpdesk, createLaporan, storeLaporan, detailLaporan, validasiDigital, validasiSelesai, belumSelesai, profil, updateProfil }

export default PegawaiController