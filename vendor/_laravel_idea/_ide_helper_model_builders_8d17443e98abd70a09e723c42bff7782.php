<?php //087b6ac9a0744595f88cb3a0a6b1a583
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models\User {

    use App\Models\User\Role;
    use App\Models\User\Service;
    use App\Models\User\User;
    use App\Models\User\UserType;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Role|null getOrPut($key, $value)
     * @method Role|$this shift(int $count = 1)
     * @method Role|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Role|$this pop(int $count = 1)
     * @method Role|null pull($key, \Closure $default = null)
     * @method Role|null last(callable $callback = null, \Closure $default = null)
     * @method Role|$this random(callable|int|null $number = null)
     * @method Role|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Role|null get($key, \Closure $default = null)
     * @method Role|null first(callable $callback = null, \Closure $default = null)
     * @method Role|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Role|null find($key, $default = null)
     * @method Role[] all()
     */
    class _IH_Role_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Role[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Role_QB whereRoleId($value)
     * @method _IH_Role_QB whereUserTypeId($value)
     * @method _IH_Role_QB whereServiceId($value)
     * @method _IH_Role_QB whereCanView($value)
     * @method _IH_Role_QB whereCanCreate($value)
     * @method _IH_Role_QB whereCanUpdate($value)
     * @method _IH_Role_QB whereCanDelete($value)
     * @method _IH_Role_QB whereStatus($value)
     * @method _IH_Role_QB whereCreatedAt($value)
     * @method _IH_Role_QB whereUpdatedAt($value)
     * @method Role baseSole(array|string $columns = ['*'])
     * @method Role create(array $attributes = [])
     * @method _IH_Role_C|Role[] cursor()
     * @method Role|null|_IH_Role_C|Role[] find($id, array|string $columns = ['*'])
     * @method _IH_Role_C|Role[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Role|_IH_Role_C|Role[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Role|_IH_Role_C|Role[] findOrFail($id, array|string $columns = ['*'])
     * @method Role|_IH_Role_C|Role[] findOrNew($id, array|string $columns = ['*'])
     * @method Role first(array|string $columns = ['*'])
     * @method Role firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Role firstOrCreate(array $attributes = [], array $values = [])
     * @method Role firstOrFail(array|string $columns = ['*'])
     * @method Role firstOrNew(array $attributes = [], array $values = [])
     * @method Role firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Role forceCreate(array $attributes)
     * @method _IH_Role_C|Role[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Role_C|Role[] get(array|string $columns = ['*'])
     * @method Role getModel()
     * @method Role[] getModels(array|string $columns = ['*'])
     * @method _IH_Role_C|Role[] hydrate(array $items)
     * @method Role make(array $attributes = [])
     * @method Role newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Role[]|_IH_Role_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Role[]|_IH_Role_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Role sole(array|string $columns = ['*'])
     * @method Role updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Role_QB extends _BaseBuilder {}

    /**
     * @method Service|null getOrPut($key, $value)
     * @method Service|$this shift(int $count = 1)
     * @method Service|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Service|$this pop(int $count = 1)
     * @method Service|null pull($key, \Closure $default = null)
     * @method Service|null last(callable $callback = null, \Closure $default = null)
     * @method Service|$this random(callable|int|null $number = null)
     * @method Service|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Service|null get($key, \Closure $default = null)
     * @method Service|null first(callable $callback = null, \Closure $default = null)
     * @method Service|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Service|null find($key, $default = null)
     * @method Service[] all()
     */
    class _IH_Service_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Service[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Service_QB whereServiceId($value)
     * @method _IH_Service_QB whereCode($value)
     * @method _IH_Service_QB whereName($value)
     * @method _IH_Service_QB whereStatus($value)
     * @method _IH_Service_QB whereCreatedAt($value)
     * @method _IH_Service_QB whereUpdatedAt($value)
     * @method Service baseSole(array|string $columns = ['*'])
     * @method Service create(array $attributes = [])
     * @method _IH_Service_C|Service[] cursor()
     * @method Service|null|_IH_Service_C|Service[] find($id, array|string $columns = ['*'])
     * @method _IH_Service_C|Service[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Service|_IH_Service_C|Service[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Service|_IH_Service_C|Service[] findOrFail($id, array|string $columns = ['*'])
     * @method Service|_IH_Service_C|Service[] findOrNew($id, array|string $columns = ['*'])
     * @method Service first(array|string $columns = ['*'])
     * @method Service firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Service firstOrCreate(array $attributes = [], array $values = [])
     * @method Service firstOrFail(array|string $columns = ['*'])
     * @method Service firstOrNew(array $attributes = [], array $values = [])
     * @method Service firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Service forceCreate(array $attributes)
     * @method _IH_Service_C|Service[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Service_C|Service[] get(array|string $columns = ['*'])
     * @method Service getModel()
     * @method Service[] getModels(array|string $columns = ['*'])
     * @method _IH_Service_C|Service[] hydrate(array $items)
     * @method Service make(array $attributes = [])
     * @method Service newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Service[]|_IH_Service_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Service[]|_IH_Service_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Service sole(array|string $columns = ['*'])
     * @method Service updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Service_QB extends _BaseBuilder {}

    /**
     * @method UserType|null getOrPut($key, $value)
     * @method UserType|$this shift(int $count = 1)
     * @method UserType|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UserType|$this pop(int $count = 1)
     * @method UserType|null pull($key, \Closure $default = null)
     * @method UserType|null last(callable $callback = null, \Closure $default = null)
     * @method UserType|$this random(callable|int|null $number = null)
     * @method UserType|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UserType|null get($key, \Closure $default = null)
     * @method UserType|null first(callable $callback = null, \Closure $default = null)
     * @method UserType|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UserType|null find($key, $default = null)
     * @method UserType[] all()
     */
    class _IH_UserType_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserType[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_UserType_QB whereTypeId($value)
     * @method _IH_UserType_QB whereCode($value)
     * @method _IH_UserType_QB whereName($value)
     * @method _IH_UserType_QB whereStatus($value)
     * @method _IH_UserType_QB whereCreatedAt($value)
     * @method _IH_UserType_QB whereUpdatedAt($value)
     * @method UserType baseSole(array|string $columns = ['*'])
     * @method UserType create(array $attributes = [])
     * @method _IH_UserType_C|UserType[] cursor()
     * @method UserType|null|_IH_UserType_C|UserType[] find($id, array|string $columns = ['*'])
     * @method _IH_UserType_C|UserType[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UserType|_IH_UserType_C|UserType[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserType|_IH_UserType_C|UserType[] findOrFail($id, array|string $columns = ['*'])
     * @method UserType|_IH_UserType_C|UserType[] findOrNew($id, array|string $columns = ['*'])
     * @method UserType first(array|string $columns = ['*'])
     * @method UserType firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserType firstOrCreate(array $attributes = [], array $values = [])
     * @method UserType firstOrFail(array|string $columns = ['*'])
     * @method UserType firstOrNew(array $attributes = [], array $values = [])
     * @method UserType firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserType forceCreate(array $attributes)
     * @method _IH_UserType_C|UserType[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserType_C|UserType[] get(array|string $columns = ['*'])
     * @method UserType getModel()
     * @method UserType[] getModels(array|string $columns = ['*'])
     * @method _IH_UserType_C|UserType[] hydrate(array $items)
     * @method UserType make(array $attributes = [])
     * @method UserType newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserType[]|_IH_UserType_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|UserType[]|_IH_UserType_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserType sole(array|string $columns = ['*'])
     * @method UserType updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UserType_QB extends _BaseBuilder {}

    /**
     * @method User|null getOrPut($key, $value)
     * @method User|$this shift(int $count = 1)
     * @method User|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method User|$this pop(int $count = 1)
     * @method User|null pull($key, \Closure $default = null)
     * @method User|null last(callable $callback = null, \Closure $default = null)
     * @method User|$this random(callable|int|null $number = null)
     * @method User|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method User|null get($key, \Closure $default = null)
     * @method User|null first(callable $callback = null, \Closure $default = null)
     * @method User|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method User|null find($key, $default = null)
     * @method User[] all()
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @return User[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_User_QB whereUserId($value)
     * @method _IH_User_QB whereCode($value)
     * @method _IH_User_QB whereName($value)
     * @method _IH_User_QB whereFirstname($value)
     * @method _IH_User_QB whereLastname($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB whereGsm($value)
     * @method _IH_User_QB whereTelephone($value)
     * @method _IH_User_QB whereUserTypeId($value)
     * @method _IH_User_QB whereStatus($value)
     * @method _IH_User_QB whereLastIp($value)
     * @method _IH_User_QB whereApiKey($value)
     * @method _IH_User_QB whereSecretKey($value)
     * @method _IH_User_QB wherePassword($value)
     * @method _IH_User_QB whereRememberToken($value)
     * @method _IH_User_QB whereCreatedAt($value)
     * @method _IH_User_QB whereUpdatedAt($value)
     * @method User baseSole(array|string $columns = ['*'])
     * @method User create(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User|null|_IH_User_C|User[] find($id, array|string $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User|_IH_User_C|User[] findOrFail($id, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrNew($id, array|string $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array|string $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method _IH_User_C|User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|User[] hydrate(array $items)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_User_QB extends _BaseBuilder {}
}
