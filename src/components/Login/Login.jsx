import React from "react"
import {reduxForm} from "redux-form"
import {Redirect} from "react-router-dom"
import {connect} from "react-redux"

import {createField, Input} from "../common/FormsControls/FormsControl"
import {required} from "../../utils/validators/validator"
import {loginTC as login} from "../../redux/auth-reducer"
import s from '../common/FormsControls/FormsControls.module.css'

const LoginForm = ({handleSubmit, error}) => {
    return (
        <form onSubmit={handleSubmit}>
            {createField('Email', 'email', [required], Input)}
            {createField('Password', 'password', [required], Input, 'password')}
            {createField(null, 'rememberMe', [], Input, 'checkbox', 'remember me')}
            <button>Login</button>
            {error && <div className={s.formSummaryError}>{error}</div>}

        </form>
    )
}

const LoginReduxForm = reduxForm({form: 'login'})(LoginForm)

const Login = (props) => {
    const onSubmit = (formData) => {
        props.login(formData.email, formData.password, formData.rememberMe)
    }
    if (props.isAuth) {
        return <Redirect to={'/profile'}/>
    }
    return (
        <div>
            <h1>Login</h1>
            <LoginReduxForm onSubmit={onSubmit}/>
        </div>
    )
}

const mapStateToProps = (state) => ({
    isAuth: state.auth.isAuth
})

const mapDispatchToStateObj = {
    login
}


export default connect(mapStateToProps, mapDispatchToStateObj)(Login)