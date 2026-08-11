import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../../../wayfinder'
/**
* @see \App\Http\Controllers\VerifikasiTtdController::show
 * @see app/Http/Controllers/VerifikasiTtdController.php:14
 * @route '/verifikasi/{nomor}'
 */
export const show = (args: { nomor: string | number } | [nomor: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: show.url(args, options),
    method: 'get',
})

show.definition = {
    methods: ["get","head"],
    url: '/verifikasi/{nomor}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\VerifikasiTtdController::show
 * @see app/Http/Controllers/VerifikasiTtdController.php:14
 * @route '/verifikasi/{nomor}'
 */
show.url = (args: { nomor: string | number } | [nomor: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { nomor: args }
    }

    
    if (Array.isArray(args)) {
        args = {
                    nomor: args[0],
                }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
                        nomor: args.nomor,
                }

    return show.definition.url
            .replace('{nomor}', parsedArgs.nomor.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\VerifikasiTtdController::show
 * @see app/Http/Controllers/VerifikasiTtdController.php:14
 * @route '/verifikasi/{nomor}'
 */
show.get = (args: { nomor: string | number } | [nomor: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: show.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\VerifikasiTtdController::show
 * @see app/Http/Controllers/VerifikasiTtdController.php:14
 * @route '/verifikasi/{nomor}'
 */
show.head = (args: { nomor: string | number } | [nomor: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: show.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\VerifikasiTtdController::show
 * @see app/Http/Controllers/VerifikasiTtdController.php:14
 * @route '/verifikasi/{nomor}'
 */
    const showForm = (args: { nomor: string | number } | [nomor: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: show.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\VerifikasiTtdController::show
 * @see app/Http/Controllers/VerifikasiTtdController.php:14
 * @route '/verifikasi/{nomor}'
 */
        showForm.get = (args: { nomor: string | number } | [nomor: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: show.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\VerifikasiTtdController::show
 * @see app/Http/Controllers/VerifikasiTtdController.php:14
 * @route '/verifikasi/{nomor}'
 */
        showForm.head = (args: { nomor: string | number } | [nomor: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: show.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    show.form = showForm
const VerifikasiTtdController = { show }

export default VerifikasiTtdController