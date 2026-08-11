import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../../wayfinder'
/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::create
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:69
 * @route '/pegawai/laporan-helpdesk/create'
 */
export const create = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: create.url(options),
    method: 'get',
})

create.definition = {
    methods: ["get","head"],
    url: '/pegawai/laporan-helpdesk/create',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::create
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:69
 * @route '/pegawai/laporan-helpdesk/create'
 */
create.url = (options?: RouteQueryOptions) => {
    return create.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::create
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:69
 * @route '/pegawai/laporan-helpdesk/create'
 */
create.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: create.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::create
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:69
 * @route '/pegawai/laporan-helpdesk/create'
 */
create.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: create.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::create
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:69
 * @route '/pegawai/laporan-helpdesk/create'
 */
    const createForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: create.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::create
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:69
 * @route '/pegawai/laporan-helpdesk/create'
 */
        createForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: create.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::create
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:69
 * @route '/pegawai/laporan-helpdesk/create'
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
* @see \App\Http\Controllers\Pegawai\PegawaiController::store
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:79
 * @route '/pegawai/laporan-helpdesk'
 */
export const store = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: store.url(options),
    method: 'post',
})

store.definition = {
    methods: ["post"],
    url: '/pegawai/laporan-helpdesk',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::store
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:79
 * @route '/pegawai/laporan-helpdesk'
 */
store.url = (options?: RouteQueryOptions) => {
    return store.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::store
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:79
 * @route '/pegawai/laporan-helpdesk'
 */
store.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: store.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::store
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:79
 * @route '/pegawai/laporan-helpdesk'
 */
    const storeForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: store.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::store
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:79
 * @route '/pegawai/laporan-helpdesk'
 */
        storeForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: store.url(options),
            method: 'post',
        })
    
    store.form = storeForm
/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::detail
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:121
 * @route '/pegawai/laporan-helpdesk/{id}'
 */
export const detail = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: detail.url(args, options),
    method: 'get',
})

detail.definition = {
    methods: ["get","head"],
    url: '/pegawai/laporan-helpdesk/{id}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::detail
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:121
 * @route '/pegawai/laporan-helpdesk/{id}'
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
* @see \App\Http\Controllers\Pegawai\PegawaiController::detail
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:121
 * @route '/pegawai/laporan-helpdesk/{id}'
 */
detail.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: detail.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::detail
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:121
 * @route '/pegawai/laporan-helpdesk/{id}'
 */
detail.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: detail.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::detail
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:121
 * @route '/pegawai/laporan-helpdesk/{id}'
 */
    const detailForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: detail.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::detail
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:121
 * @route '/pegawai/laporan-helpdesk/{id}'
 */
        detailForm.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: detail.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::detail
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:121
 * @route '/pegawai/laporan-helpdesk/{id}'
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
const laporanHelpdesk = {
    create: Object.assign(create, create),
store: Object.assign(store, store),
detail: Object.assign(detail, detail),
validasiDigital: Object.assign(validasiDigital, validasiDigital),
validasiSelesai: Object.assign(validasiSelesai, validasiSelesai),
belumSelesai: Object.assign(belumSelesai, belumSelesai),
}

export default laporanHelpdesk