import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../wayfinder'
/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::update
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:244
 * @route '/pegawai/profil'
 */
export const update = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: update.url(options),
    method: 'post',
})

update.definition = {
    methods: ["post"],
    url: '/pegawai/profil',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::update
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:244
 * @route '/pegawai/profil'
 */
update.url = (options?: RouteQueryOptions) => {
    return update.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\Pegawai\PegawaiController::update
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:244
 * @route '/pegawai/profil'
 */
update.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: update.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::update
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:244
 * @route '/pegawai/profil'
 */
    const updateForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: update.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\Pegawai\PegawaiController::update
 * @see app/Http/Controllers/Pegawai/PegawaiController.php:244
 * @route '/pegawai/profil'
 */
        updateForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: update.url(options),
            method: 'post',
        })
    
    update.form = updateForm
const profil = {
    update: Object.assign(update, update),
}

export default profil