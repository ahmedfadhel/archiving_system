@extends('layouts.manage')

@section('content')
    <div class="columns">
        <div class="column">
            <h2 class="title">
                اللوحة الرئيسية
            </h2>
        </div>
    </div>
    <div class="columns">
        <div class="column">
            <div class="card">
                <div class="card-header">
                    <p class="card-header-title">
                        جدول المستخدمين
                    </p>
                </div>
                   
                <div class="card-content">
                    <b-table :data="users" :columns="usersColumns" :hoverable="isHoverable"></b-table>
                </div>
            </div>
        </div>
    </div>
    <div class="columns">
        <div class="column">
            <div class="card">
                <div class="card-header">
                    <p class="card-header-title">
                        جدول الادوار
                    </p>
                </div>
                    
                <div class="card-content">
                    <b-table :data="roles" :columns="rolesColumns" :hoverable="isHoverable"></b-table>
                </div>
            </div>
        </div>
    </div>
    <div class="columns">
            <div class="column">
                <div class="card">
                    <div class="card-header">
                        <p class="card-header-title">
                            جدول الاذونات
                        </p>
                    </div>
                        
                    <div class="card-content">
                            <b-table :data="permissions" :columns="rolesColumns" :hoverable="isHoverable"></b-table>
                    </div>
                </div>
            </div>
        </div>
    @if (session('status'))
    <article class="message is-success">
      <div class="message-body">
          {{ session('status') }}
      </div>
      You are logged in!
    </article>
@endif
@endsection

@section('scripts')
    <script>
     
        const app = new Vue({
            el: "#app",
            data:{
                permissions: {!! json_encode($permissions) !!},
                roles: {!! json_encode($roles) !!},
                users: {!! json_encode($users) !!},
                usersColumns: [
                    {
                        field: 'id',
                        label: 'ت',
                        width: '40',
                        numeric: true,
                        centered: true
                    },
                    {
                        field: 'name',
                        label: 'الاسم',
                        centered: true
                    },
                    {
                        field: 'email',
                        label: 'البريد الالكتروني',
                        centered: true
                    },
                    {
                        field: 'created_at',
                        label: 'وقت الانشاء',
                        centered: true
                    },
                    {
                        field: 'updated_at',
                        label: 'وقت التعديل',
                        centered: true
                    }
                ],
                rolesColumns:[
                    {
                        field: 'id',
                        label: 'ت',
                        width: '40',
                        numeric: true,
                        centered: true
                    },
                    {
                        field: 'name',
                        label: 'الاسم',
                        centered: true
                    },
                    {
                        field: 'display_name',
                        label: 'الاسم الصريح',
                        centered: true
                    },
                    {
                        field: 'description',
                        label: 'الوصف',
                        centered: true
                    }

                ],
                isHoverable:true
            }
        })
    </script>
@endsection