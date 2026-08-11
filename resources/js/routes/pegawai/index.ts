import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../wayfinder'
import laporanHelpdesk2a68f2 from './laporan-helpdesk'
import profilE0c6b8 from './profil'
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
const pegawai = {
    dashboard: Object.assign(dashboard, dashboard),
laporanHelpdesk: Object.assign(laporanHelpdesk, laporanHelpdesk2a68f2),
profil: Object.assign(profil, profilE0c6b8),
}

export default pegawai