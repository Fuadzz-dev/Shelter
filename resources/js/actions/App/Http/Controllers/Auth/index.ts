import AuthController from './AuthController'
import ForgotPasswordController from './ForgotPasswordController'
const Auth = {
    AuthController: Object.assign(AuthController, AuthController),
ForgotPasswordController: Object.assign(ForgotPasswordController, ForgotPasswordController),
}

export default Auth