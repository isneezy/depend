<template>
    <div class="wrapper">
        <layout>
            <header>
                <i-menu mode="horizontal">
                    <div class="logo"></div>
                    <div class="nav">
                        <menu-item>
                            <icon type="ios-cloud-upload" size="24"/> Submeter
                        </menu-item>
                        <submenu>
                            <template slot="title">
                                <icon size="24" type="ios-contact"/> isneezy
                            </template>
                            <menu-item><icon type="ios-person" size="18"/> Perfil</menu-item>
                            <menu-item><icon type="ios-settings" size="18"/> Definições</menu-item>
                            <menu-item><icon type="ios-lock" size="18"/> Alterar Senha</menu-item>
                            <menu-item><icon type="ios-archive" size="18"/> Meus Pacotes</menu-item>
                            <menu-item><icon type="ios-exit" size="18"/> Sair</menu-item>
                        </submenu>
                    </div>
                </i-menu>
            </header>
        </layout>
        <router-view/>
    </div>
</template>

<style>
    .wrapper{
        border: 1px solid #d7dde4;
        background: #f5f7f9;
        position: relative;
        height: 100vh;
        overflow-y: auto;
    }

    .logo{
        width: 100px;
        height: 30px;
        background: #5b6270;
        border-radius: 3px;
        float: left;
        position: relative;
        top: 15px;
        left: 20px;
    }

    .nav{
        width: 420px;
        margin: 0 auto;
        margin-right: 20px;
    }
</style>
