import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../wayfinder'
/**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/ketentuan-layanan'
 */
const ViewController7a90d99e869e9f854a84346bed1c9aea = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: ViewController7a90d99e869e9f854a84346bed1c9aea.url(options),
    method: 'get',
})

ViewController7a90d99e869e9f854a84346bed1c9aea.definition = {
    methods: ["get","head"],
    url: '/ketentuan-layanan',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/ketentuan-layanan'
 */
ViewController7a90d99e869e9f854a84346bed1c9aea.url = (options?: RouteQueryOptions) => {
    return ViewController7a90d99e869e9f854a84346bed1c9aea.definition.url + queryParams(options)
}

/**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/ketentuan-layanan'
 */
ViewController7a90d99e869e9f854a84346bed1c9aea.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: ViewController7a90d99e869e9f854a84346bed1c9aea.url(options),
    method: 'get',
})
/**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/ketentuan-layanan'
 */
ViewController7a90d99e869e9f854a84346bed1c9aea.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: ViewController7a90d99e869e9f854a84346bed1c9aea.url(options),
    method: 'head',
})

    /**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/ketentuan-layanan'
 */
    const ViewController7a90d99e869e9f854a84346bed1c9aeaForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: ViewController7a90d99e869e9f854a84346bed1c9aea.url(options),
        method: 'get',
    })

            /**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/ketentuan-layanan'
 */
        ViewController7a90d99e869e9f854a84346bed1c9aeaForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: ViewController7a90d99e869e9f854a84346bed1c9aea.url(options),
            method: 'get',
        })
            /**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/ketentuan-layanan'
 */
        ViewController7a90d99e869e9f854a84346bed1c9aeaForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: ViewController7a90d99e869e9f854a84346bed1c9aea.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    ViewController7a90d99e869e9f854a84346bed1c9aea.form = ViewController7a90d99e869e9f854a84346bed1c9aeaForm
    /**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/kebijakan-privasi'
 */
const ViewController8d420e8836099d9098a665641f2faef3 = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: ViewController8d420e8836099d9098a665641f2faef3.url(options),
    method: 'get',
})

ViewController8d420e8836099d9098a665641f2faef3.definition = {
    methods: ["get","head"],
    url: '/kebijakan-privasi',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/kebijakan-privasi'
 */
ViewController8d420e8836099d9098a665641f2faef3.url = (options?: RouteQueryOptions) => {
    return ViewController8d420e8836099d9098a665641f2faef3.definition.url + queryParams(options)
}

/**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/kebijakan-privasi'
 */
ViewController8d420e8836099d9098a665641f2faef3.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: ViewController8d420e8836099d9098a665641f2faef3.url(options),
    method: 'get',
})
/**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/kebijakan-privasi'
 */
ViewController8d420e8836099d9098a665641f2faef3.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: ViewController8d420e8836099d9098a665641f2faef3.url(options),
    method: 'head',
})

    /**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/kebijakan-privasi'
 */
    const ViewController8d420e8836099d9098a665641f2faef3Form = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: ViewController8d420e8836099d9098a665641f2faef3.url(options),
        method: 'get',
    })

            /**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/kebijakan-privasi'
 */
        ViewController8d420e8836099d9098a665641f2faef3Form.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: ViewController8d420e8836099d9098a665641f2faef3.url(options),
            method: 'get',
        })
            /**
* @see \Illuminate\Routing\ViewController::__invoke
 * @see vendor/laravel/framework/src/Illuminate/Routing/ViewController.php:32
 * @route '/kebijakan-privasi'
 */
        ViewController8d420e8836099d9098a665641f2faef3Form.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: ViewController8d420e8836099d9098a665641f2faef3.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    ViewController8d420e8836099d9098a665641f2faef3.form = ViewController8d420e8836099d9098a665641f2faef3Form

/**
* Multiple routes resolve to \Illuminate\Routing\ViewController::ViewController, so this export is a
* dictionary keyed by URI rather than a callable. Call a specific route with `ViewController['<uri>'](...)`,
* or import the route by name from your generated `routes/` directory.
*/
const ViewController = {
    '/ketentuan-layanan': ViewController7a90d99e869e9f854a84346bed1c9aea,
    '/kebijakan-privasi': ViewController8d420e8836099d9098a665641f2faef3,
}

export default ViewController