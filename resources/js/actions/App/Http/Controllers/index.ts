import Auth from './Auth'
import Pegawai from './Pegawai'
import Admin from './Admin'
import VerifikasiTtdController from './VerifikasiTtdController'
import VerifikasiAdminController from './VerifikasiAdminController'
import Settings from './Settings'
const Controllers = {
    Auth: Object.assign(Auth, Auth),
Pegawai: Object.assign(Pegawai, Pegawai),
Admin: Object.assign(Admin, Admin),
VerifikasiTtdController: Object.assign(VerifikasiTtdController, VerifikasiTtdController),
VerifikasiAdminController: Object.assign(VerifikasiAdminController, VerifikasiAdminController),
Settings: Object.assign(Settings, Settings),
}

export default Controllers