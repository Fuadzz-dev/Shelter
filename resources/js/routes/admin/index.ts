import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../wayfinder'
import helpdesk7845f6 from './helpdesk'
import laporanHelpdesk from './laporan-helpdesk'
import manajemenPengguna7d6fbc from './manajemen-pengguna'
import riwayatHelpdesk93a534 from './riwayat-helpdesk'
import profilE0c6b8 from './profil'
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
const admin = {
    helpdesk: Object.assign(helpdesk, helpdesk7845f6),
laporanHelpdesk: Object.assign(laporanHelpdesk, laporanHelpdesk),
manajemenPengguna: Object.assign(manajemenPengguna, manajemenPengguna7d6fbc),
riwayatHelpdesk: Object.assign(riwayatHelpdesk, riwayatHelpdesk93a534),
profil: Object.assign(profil, profilE0c6b8),
}

export default admin