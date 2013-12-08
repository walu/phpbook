ZEND_API zend_mm_heap *zend_mm_startup_ex(const zend_mm_mem_handlers *handlers, size_t block_size, size_t reserve_size, int internal, void *params)

ZEND_API zend_mm_heap *zend_mm_startup(void)

ZEND_API void zend_mm_shutdown(zend_mm_heap *heap, int full_shutdown, int silent TSRMLS_DC)

ZEND_API void *_zend_mm_alloc(zend_mm_heap *heap, size_t size ZEND_FILE_LINE_DC ZEND_FILE_LINE_ORIG_DC)

ZEND_API void _zend_mm_free(zend_mm_heap *heap, void *p ZEND_FILE_LINE_DC ZEND_FILE_LINE_ORIG_DC)

ZEND_API void *_zend_mm_realloc(zend_mm_heap *heap, void *ptr, size_t size ZEND_FILE_LINE_DC ZEND_FILE_LINE_ORIG_DC)

ZEND_API size_t _zend_mm_block_size(zend_mm_heap *heap, void *p ZEND_FILE_LINE_DC ZEND_FILE_LINE_ORIG_DC)

ZEND_API int is_zend_mm(TSRMLS_D)

ZEND_API void *_emalloc(size_t size ZEND_FILE_LINE_DC ZEND_FILE_LINE_ORIG_DC)

ZEND_API void _efree(void *ptr ZEND_FILE_LINE_DC ZEND_FILE_LINE_ORIG_DC)

ZEND_API void *_erealloc(void *ptr, size_t size, int allow_failure ZEND_FILE_LINE_DC ZEND_FILE_LINE_ORIG_DC)

ZEND_API size_t _zend_mem_block_size(void *ptr TSRMLS_DC ZEND_FILE_LINE_DC ZEND_FILE_LINE_ORIG_DC)

ZEND_API void *_safe_emalloc(size_t nmemb, size_t size, size_t offset ZEND_FILE_LINE_DC ZEND_FILE_LINE_ORIG_DC)

ZEND_API void *_safe_malloc(size_t nmemb, size_t size, size_t offset)

ZEND_API void *_safe_erealloc(void *ptr, size_t nmemb, size_t size, size_t offset ZEND_FILE_LINE_DC ZEND_FILE_LINE_ORIG_DC)

ZEND_API void *_safe_realloc(void *ptr, size_t nmemb, size_t size, size_t offset)

ZEND_API void *_ecalloc(size_t nmemb, size_t size ZEND_FILE_LINE_DC ZEND_FILE_LINE_ORIG_DC)

ZEND_API char *_estrdup(const char *s ZEND_FILE_LINE_DC ZEND_FILE_LINE_ORIG_DC)

ZEND_API char *_estrndup(const char *s, uint length ZEND_FILE_LINE_DC ZEND_FILE_LINE_ORIG_DC)

ZEND_API char *zend_strndup(const char *s, uint length)

ZEND_API int zend_set_memory_limit(size_t memory_limit)

ZEND_API size_t zend_memory_usage(int real_usage TSRMLS_DC)

ZEND_API size_t zend_memory_peak_usage(int real_usage TSRMLS_DC)

ZEND_API void shutdown_memory_manager(int silent, int full_shutdown TSRMLS_DC)

ZEND_API void start_memory_manager(TSRMLS_D)

ZEND_API zend_mm_heap *zend_mm_set_heap(zend_mm_heap *new_heap TSRMLS_DC)

ZEND_API zend_mm_storage *zend_mm_get_storage(zend_mm_heap *heap)

ZEND_API void zend_mm_set_custom_handlers(zend_mm_heap *heap,

ZEND_API int _mem_block_check(void *ptr, int silent ZEND_FILE_LINE_DC ZEND_FILE_LINE_ORIG_DC)

ZEND_API void _full_mem_check(int silent ZEND_FILE_LINE_DC ZEND_FILE_LINE_ORIG_DC)

ZEND_API HashTable module_registry;

ZEND_API int zend_get_parameters(int ht, int param_count, ...) 

ZEND_API int _zend_get_parameters_array(int ht, int param_count, zval **argument_array TSRMLS_DC) 

ZEND_API int zend_get_parameters_ex(int param_count, ...) 

ZEND_API int _zend_get_parameters_array_ex(int param_count, zval ***argument_array TSRMLS_DC) 

ZEND_API int zend_copy_parameters_array(int param_count, zval *argument_array TSRMLS_DC) 

ZEND_API void zend_wrong_param_count(TSRMLS_D) 

ZEND_API char *zend_get_type_by_const(int type) 

ZEND_API char *zend_zval_type_name(const zval *arg) 

ZEND_API zend_class_entry *zend_get_class_entry(const zval *zobject TSRMLS_DC) 

ZEND_API int zend_get_object_classname(const zval *object, char **class_name, zend_uint *class_name_len TSRMLS_DC) 

ZEND_API int zend_parse_parameters_ex(int flags, int num_args TSRMLS_DC, char *type_spec, ...) 

ZEND_API int zend_parse_parameters(int num_args TSRMLS_DC, char *type_spec, ...) 

ZEND_API int zend_parse_method_parameters(int num_args TSRMLS_DC, zval *this_ptr, char *type_spec, ...) 

ZEND_API int zend_parse_method_parameters_ex(int flags, int num_args TSRMLS_DC, zval *this_ptr, char *type_spec, ...) 

ZEND_API int _array_init(zval *arg, uint size ZEND_FILE_LINE_DC) 

ZEND_API void zend_merge_properties(zval *obj, HashTable *properties, int destroy_ht TSRMLS_DC) 

ZEND_API void zend_update_class_constants(zend_class_entry *class_type TSRMLS_DC) 

ZEND_API int _object_and_properties_init(zval *arg, zend_class_entry *class_type, HashTable *properties ZEND_FILE_LINE_DC TSRMLS_DC) 

ZEND_API int _object_init_ex(zval *arg, zend_class_entry *class_type ZEND_FILE_LINE_DC TSRMLS_DC) 

ZEND_API int _object_init(zval *arg ZEND_FILE_LINE_DC TSRMLS_DC) 

ZEND_API int add_assoc_function(zval *arg, const char *key, void (*function_ptr)(INTERNAL_FUNCTION_PARAMETERS)) 

ZEND_API int add_assoc_long_ex(zval *arg, const char *key, uint key_len, long n) 

ZEND_API int add_assoc_null_ex(zval *arg, const char *key, uint key_len) 

ZEND_API int add_assoc_bool_ex(zval *arg, const char *key, uint key_len, int b) 

ZEND_API int add_assoc_resource_ex(zval *arg, const char *key, uint key_len, int r) 

ZEND_API int add_assoc_double_ex(zval *arg, const char *key, uint key_len, double d) 

ZEND_API int add_assoc_string_ex(zval *arg, const char *key, uint key_len, char *str, int duplicate) 

ZEND_API int add_assoc_stringl_ex(zval *arg, const char *key, uint key_len, char *str, uint length, int duplicate) 

ZEND_API int add_assoc_zval_ex(zval *arg, const char *key, uint key_len, zval *value) 

ZEND_API int add_index_long(zval *arg, ulong index, long n) 

ZEND_API int add_index_null(zval *arg, ulong index) 

ZEND_API int add_index_bool(zval *arg, ulong index, int b) 

ZEND_API int add_index_resource(zval *arg, ulong index, int r) 

ZEND_API int add_index_double(zval *arg, ulong index, double d) 

ZEND_API int add_index_string(zval *arg, ulong index, const char *str, int duplicate) 

ZEND_API int add_index_stringl(zval *arg, ulong index, const char *str, uint length, int duplicate) 

ZEND_API int add_index_zval(zval *arg, ulong index, zval *value) 

ZEND_API int add_next_index_long(zval *arg, long n) 

ZEND_API int add_next_index_null(zval *arg) 

ZEND_API int add_next_index_bool(zval *arg, int b) 

ZEND_API int add_next_index_resource(zval *arg, int r) 

ZEND_API int add_next_index_double(zval *arg, double d) 

ZEND_API int add_next_index_string(zval *arg, const char *str, int duplicate) 

ZEND_API int add_next_index_stringl(zval *arg, const char *str, uint length, int duplicate) 

ZEND_API int add_next_index_zval(zval *arg, zval *value) 

ZEND_API int add_get_assoc_string_ex(zval *arg, const char *key, uint key_len, const char *str, void **dest, int duplicate) 

ZEND_API int add_get_assoc_stringl_ex(zval *arg, const char *key, uint key_len, const char *str, uint length, void **dest, int duplicate) 

ZEND_API int add_get_index_long(zval *arg, ulong index, long l, void **dest) 

ZEND_API int add_get_index_double(zval *arg, ulong index, double d, void **dest) 

ZEND_API int add_get_index_string(zval *arg, ulong index, const char *str, void **dest, int duplicate) 

ZEND_API int add_get_index_stringl(zval *arg, ulong index, const char *str, uint length, void **dest, int duplicate) 

ZEND_API int add_property_long_ex(zval *arg, const char *key, uint key_len, long n TSRMLS_DC) 

ZEND_API int add_property_bool_ex(zval *arg, const char *key, uint key_len, int b TSRMLS_DC) 

ZEND_API int add_property_null_ex(zval *arg, const char *key, uint key_len TSRMLS_DC) 

ZEND_API int add_property_resource_ex(zval *arg, const char *key, uint key_len, long n TSRMLS_DC) 

ZEND_API int add_property_double_ex(zval *arg, const char *key, uint key_len, double d TSRMLS_DC) 

ZEND_API int add_property_string_ex(zval *arg, const char *key, uint key_len, char *str, int duplicate TSRMLS_DC) 

ZEND_API int add_property_stringl_ex(zval *arg, const char *key, uint key_len, char *str, uint length, int duplicate TSRMLS_DC) 

ZEND_API int add_property_zval_ex(zval *arg, const char *key, uint key_len, zval *value TSRMLS_DC) 

ZEND_API int zend_startup_module_ex(zend_module_entry *module TSRMLS_DC) 

ZEND_API int zend_startup_modules(TSRMLS_D) 

ZEND_API zend_module_entry* zend_register_module_ex(zend_module_entry *module TSRMLS_DC) 

ZEND_API zend_module_entry* zend_register_internal_module(zend_module_entry *module TSRMLS_DC) 

ZEND_API void zend_check_magic_method_implementation(const zend_class_entry *ce, const zend_function *fptr, int error_type TSRMLS_DC) 

ZEND_API int zend_register_functions(zend_class_entry *scope, const zend_function_entry *functions, HashTable *function_table, int type TSRMLS_DC) 

ZEND_API void zend_unregister_functions(const zend_function_entry *functions, int count, HashTable *function_table TSRMLS_DC) 

ZEND_API int zend_startup_module(zend_module_entry *module) 

ZEND_API int zend_get_module_started(const char *module_name) 

ZEND_API zend_class_entry *zend_register_internal_class_ex(zend_class_entry *class_entry, zend_class_entry *parent_ce, char *parent_name TSRMLS_DC) 

ZEND_API void zend_class_implements(zend_class_entry *class_entry TSRMLS_DC, int num_interfaces, ...) 

ZEND_API zend_class_entry *zend_register_internal_class(zend_class_entry *orig_class_entry TSRMLS_DC) 

ZEND_API zend_class_entry *zend_register_internal_interface(zend_class_entry *orig_class_entry TSRMLS_DC) 

ZEND_API int zend_register_class_alias_ex(const char *name, int name_len, zend_class_entry *ce TSRMLS_DC) 

ZEND_API int zend_set_hash_symbol(zval *symbol, const char *name, int name_length, zend_bool is_ref, int num_symbol_tables, ...) 

ZEND_API ZEND_FUNCTION(display_disabled_function)

ZEND_API int zend_disable_function(char *function_name, uint function_name_length TSRMLS_DC) 

ZEND_API int zend_disable_class(char *class_name, uint class_name_length TSRMLS_DC) 

ZEND_API zend_bool zend_is_callable_ex(zval *callable, zval *object_ptr, uint check_flags, char **callable_name, int *callable_name_len, zend_fcall_info_cache *fcc, char **error TSRMLS_DC) 

ZEND_API zend_bool zend_is_callable(zval *callable, uint check_flags, char **callable_name TSRMLS_DC) 

ZEND_API zend_bool zend_make_callable(zval *callable, char **callable_name TSRMLS_DC) 

ZEND_API int zend_fcall_info_init(zval *callable, uint check_flags, zend_fcall_info *fci, zend_fcall_info_cache *fcc, char **callable_name, char **error TSRMLS_DC) 

ZEND_API void zend_fcall_info_args_clear(zend_fcall_info *fci, int free_mem) 

ZEND_API void zend_fcall_info_args_save(zend_fcall_info *fci, int *param_count, zval ****params) 

ZEND_API void zend_fcall_info_args_restore(zend_fcall_info *fci, int param_count, zval ***params) 

ZEND_API int zend_fcall_info_args(zend_fcall_info *fci, zval *args TSRMLS_DC) 

ZEND_API int zend_fcall_info_argp(zend_fcall_info *fci TSRMLS_DC, int argc, zval ***argv) 

ZEND_API int zend_fcall_info_argv(zend_fcall_info *fci TSRMLS_DC, int argc, va_list *argv) 

ZEND_API int zend_fcall_info_argn(zend_fcall_info *fci TSRMLS_DC, int argc, ...) 

ZEND_API int zend_fcall_info_call(zend_fcall_info *fci, zend_fcall_info_cache *fcc, zval **retval_ptr_ptr, zval *args TSRMLS_DC) 

ZEND_API const char *zend_get_module_version(const char *module_name) 

ZEND_API int zend_declare_property_ex(zend_class_entry *ce, const char *name, int name_length, zval *property, int access_type, char *doc_comment, int doc_comment_len TSRMLS_DC) 

ZEND_API int zend_declare_property(zend_class_entry *ce, char *name, int name_length, zval *property, int access_type TSRMLS_DC) 

ZEND_API int zend_declare_property_null(zend_class_entry *ce, char *name, int name_length, int access_type TSRMLS_DC) 

ZEND_API int zend_declare_property_bool(zend_class_entry *ce, char *name, int name_length, long value, int access_type TSRMLS_DC) 

ZEND_API int zend_declare_property_long(zend_class_entry *ce, char *name, int name_length, long value, int access_type TSRMLS_DC) 

ZEND_API int zend_declare_property_double(zend_class_entry *ce, char *name, int name_length, double value, int access_type TSRMLS_DC) 

ZEND_API int zend_declare_property_string(zend_class_entry *ce, char *name, int name_length, char *value, int access_type TSRMLS_DC) 

ZEND_API int zend_declare_property_stringl(zend_class_entry *ce, char *name, int name_length, char *value, int value_len, int access_type TSRMLS_DC) 

ZEND_API int zend_declare_class_constant(zend_class_entry *ce, const char *name, size_t name_length, zval *value TSRMLS_DC) 

ZEND_API int zend_declare_class_constant_null(zend_class_entry *ce, const char *name, size_t name_length TSRMLS_DC) 

ZEND_API int zend_declare_class_constant_long(zend_class_entry *ce, const char *name, size_t name_length, long value TSRMLS_DC) 

ZEND_API int zend_declare_class_constant_bool(zend_class_entry *ce, const char *name, size_t name_length, zend_bool value TSRMLS_DC) 

ZEND_API int zend_declare_class_constant_double(zend_class_entry *ce, const char *name, size_t name_length, double value TSRMLS_DC) 

ZEND_API int zend_declare_class_constant_stringl(zend_class_entry *ce, const char *name, size_t name_length, const char *value, size_t value_length TSRMLS_DC) 

ZEND_API int zend_declare_class_constant_string(zend_class_entry *ce, const char *name, size_t name_length, const char *value TSRMLS_DC) 

ZEND_API void zend_update_property(zend_class_entry *scope, zval *object, char *name, int name_length, zval *value TSRMLS_DC) 

ZEND_API void zend_update_property_null(zend_class_entry *scope, zval *object, char *name, int name_length TSRMLS_DC) 

ZEND_API void zend_update_property_bool(zend_class_entry *scope, zval *object, char *name, int name_length, long value TSRMLS_DC) 

ZEND_API void zend_update_property_long(zend_class_entry *scope, zval *object, char *name, int name_length, long value TSRMLS_DC) 

ZEND_API void zend_update_property_double(zend_class_entry *scope, zval *object, char *name, int name_length, double value TSRMLS_DC) 

ZEND_API void zend_update_property_string(zend_class_entry *scope, zval *object, char *name, int name_length, const char *value TSRMLS_DC) 

ZEND_API void zend_update_property_stringl(zend_class_entry *scope, zval *object, char *name, int name_length, const char *value, int value_len TSRMLS_DC) 

ZEND_API int zend_update_static_property(zend_class_entry *scope, char *name, int name_length, zval *value TSRMLS_DC) 

ZEND_API int zend_update_static_property_null(zend_class_entry *scope, char *name, int name_length TSRMLS_DC) 

ZEND_API int zend_update_static_property_bool(zend_class_entry *scope, char *name, int name_length, long value TSRMLS_DC) 

ZEND_API int zend_update_static_property_long(zend_class_entry *scope, char *name, int name_length, long value TSRMLS_DC) 

ZEND_API int zend_update_static_property_double(zend_class_entry *scope, char *name, int name_length, double value TSRMLS_DC) 

ZEND_API int zend_update_static_property_string(zend_class_entry *scope, char *name, int name_length, const char *value TSRMLS_DC) 

ZEND_API int zend_update_static_property_stringl(zend_class_entry *scope, char *name, int name_length, const char *value, int value_len TSRMLS_DC) 

ZEND_API zval *zend_read_property(zend_class_entry *scope, zval *object, char *name, int name_length, zend_bool silent TSRMLS_DC) 

ZEND_API zval *zend_read_static_property(zend_class_entry *scope, char *name, int name_length, zend_bool silent TSRMLS_DC) 

ZEND_API void zend_save_error_handling(zend_error_handling *current TSRMLS_DC) 

ZEND_API void zend_replace_error_handling(zend_error_handling_t error_handling, zend_class_entry *exception_class, zend_error_handling *current TSRMLS_DC) 

ZEND_API void zend_restore_error_handling(zend_error_handling *saved TSRMLS_DC) 

ZEND_API void zend_fetch_debug_backtrace(zval *return_value, int skip_last, int options TSRMLS_DC)

ZEND_API zend_class_entry *zend_standard_class_def = NULL;

ZEND_API int (*zend_printf)(const char *format, ...);

ZEND_API zend_write_func_t zend_write;

ZEND_API FILE *(*zend_fopen)(const char *filename, char **opened_path TSRMLS_DC);

ZEND_API int (*zend_stream_open_function)(const char *filename, zend_file_handle *handle TSRMLS_DC);

ZEND_API void (*zend_block_interruptions)(void);

ZEND_API void (*zend_unblock_interruptions)(void);

ZEND_API void (*zend_ticks_function)(int ticks);

ZEND_API void (*zend_error_cb)(int type, const char *error_filename, const uint error_lineno, const char *format, va_list args);

ZEND_API char *(*zend_getenv)(char *name, size_t name_len TSRMLS_DC);

ZEND_API char *(*zend_resolve_path)(const char *filename, int filename_len TSRMLS_DC);

ZEND_API int compiler_globals_id;

ZEND_API int executor_globals_id;

ZEND_API zend_utility_values zend_uv;

ZEND_API zval zval_used_for_init; /* True global variable */

ZEND_API void zend_make_printable_zval(zval *expr, zval *expr_copy, int *use_copy) 

ZEND_API int zend_print_zval(zval *expr, int indent) 

ZEND_API int zend_print_zval_ex(zend_write_func_t write_func, zval *expr, int indent) 

ZEND_API void zend_print_flat_zval_r(zval *expr TSRMLS_DC) 

ZEND_API void zend_print_zval_r(zval *expr, int indent TSRMLS_DC) 

ZEND_API void zend_print_zval_r_ex(zend_write_func_t write_func, zval *expr, int indent TSRMLS_DC) 

	extern ZEND_API ts_rsrc_id ini_scanner_globals_id;

	extern ZEND_API ts_rsrc_id language_scanner_globals_id;

ZEND_API void _zend_bailout(char *filename, uint lineno) 

ZEND_API char *get_zend_version(void) 

ZEND_API void zend_message_dispatcher(long message, void *data TSRMLS_DC) 

ZEND_API int zend_get_configuration_directive(const char *name, uint name_length, zval *contents) 

ZEND_API void zend_error(int type, const char *format, ...) 

ZEND_API void zend_output_debug_string(zend_bool trigger_break, const char *format, ...) 

ZEND_API int zend_execute_scripts(int type TSRMLS_DC, zval **retval, int file_count, ...) 

ZEND_API char *zend_make_compiled_string_description(const char *name TSRMLS_DC) 

ZEND_API zend_class_entry *zend_ce_closure;

ZEND_API zend_function *zend_get_closure_invoke_method(zval *obj TSRMLS_DC) 

ZEND_API const zend_function *zend_get_closure_method_def(zval *obj TSRMLS_DC) 

ZEND_API void zend_create_closure(zval *res, zend_function *func TSRMLS_DC) 

ZEND_API zend_op_array *(*zend_compile_file)(zend_file_handle *file_handle, int type TSRMLS_DC);

ZEND_API zend_op_array *(*zend_compile_string)(zval *source_string, char *filename TSRMLS_DC);

ZEND_API zend_compiler_globals compiler_globals;

ZEND_API zend_executor_globals executor_globals;

ZEND_API int zend_auto_global_disable_jit(const char *varname, zend_uint varname_length TSRMLS_DC) 

ZEND_API void file_handle_dtor(zend_file_handle *fh) 

ZEND_API char *zend_set_compiled_filename(const char *new_compiled_filename TSRMLS_DC) 

ZEND_API void zend_restore_compiled_filename(char *original_compiled_filename TSRMLS_DC) 

ZEND_API char *zend_get_compiled_filename(TSRMLS_D) 

ZEND_API int zend_get_compiled_lineno(TSRMLS_D) 

ZEND_API zend_bool zend_is_compiling(TSRMLS_D) 

ZEND_API void function_add_ref(zend_function *function) 

ZEND_API void zend_do_inherit_interfaces(zend_class_entry *ce, const zend_class_entry *iface TSRMLS_DC) 

ZEND_API void zend_do_inheritance(zend_class_entry *ce, zend_class_entry *parent_ce TSRMLS_DC) 

ZEND_API void zend_do_implement_interface(zend_class_entry *ce, zend_class_entry *iface TSRMLS_DC) 

ZEND_API int do_bind_function(zend_op *opline, HashTable *function_table, zend_bool compile_time) 

ZEND_API zend_class_entry *do_bind_class(const zend_op *opline, HashTable *class_table, zend_bool compile_time TSRMLS_DC) 

ZEND_API zend_class_entry *do_bind_inherited_class(const zend_op *opline, HashTable *class_table, zend_class_entry *parent_ce, zend_bool compile_time TSRMLS_DC) 

ZEND_API void zend_do_delayed_early_binding(const zend_op_array *op_array TSRMLS_DC) 

ZEND_API void zend_mangle_property_name(char **dest, int *dest_length, const char *src1, int src1_length, const char *src2, int src2_length, int internal) 

ZEND_API int zend_unmangle_property_name(char *mangled_property, int len, char **class_name, char **prop_name) 

ZEND_API void zend_initialize_class_data(zend_class_entry *ce, zend_bool nullify_handlers TSRMLS_DC) 

ZEND_API char* zend_get_compiled_variable_name(const zend_op_array *op_array, zend_uint var, int* name_len) 

ZEND_API size_t zend_dirname(char *path, size_t len)

ZEND_API void zend_register_long_constant(const char *name, uint name_len, long lval, int flags, int module_number TSRMLS_DC)

ZEND_API void zend_register_double_constant(const char *name, uint name_len, double dval, int flags, int module_number TSRMLS_DC)

ZEND_API void zend_register_stringl_constant(const char *name, uint name_len, char *strval, uint strlen, int flags, int module_number TSRMLS_DC)

ZEND_API void zend_register_string_constant(const char *name, uint name_len, char *strval, int flags, int module_number TSRMLS_DC)

ZEND_API int zend_get_constant(const char *name, uint name_len, zval *result TSRMLS_DC)

ZEND_API int zend_get_constant_ex(const char *name, uint name_len, zval *result, zend_class_entry *scope, ulong flags TSRMLS_DC)

ZEND_API int zend_register_constant(zend_constant *c TSRMLS_DC)

ZEND_API void zend_register_default_classes(TSRMLS_D)

ZEND_API int zend_dynamic_array_init(dynamic_array *da, unsigned int element_size, unsigned int size)

ZEND_API void *zend_dynamic_array_push(dynamic_array *da)

ZEND_API void *zend_dynamic_array_pop(dynamic_array *da)

ZEND_API void *zend_dynamic_array_get_element(dynamic_array *da, unsigned int index)

ZEND_API void (*zend_throw_exception_hook)(zval *ex TSRMLS_DC);

ZEND_API void zend_clear_exception(TSRMLS_D) 

ZEND_API zend_class_entry *zend_exception_get_default(TSRMLS_D) 

ZEND_API zend_class_entry *zend_get_error_exception(TSRMLS_D) 

ZEND_API zval * zend_throw_exception(zend_class_entry *exception_ce, char *message, long code TSRMLS_DC) 

ZEND_API zval * zend_throw_exception_ex(zend_class_entry *exception_ce, long code TSRMLS_DC, char *format, ...) 

ZEND_API zval * zend_throw_error_exception(zend_class_entry *exception_ce, char *message, long code, int severity TSRMLS_DC) 

ZEND_API void zend_exception_error(zval *exception, int severity TSRMLS_DC) 

ZEND_API void zend_throw_exception_object(zval *exception TSRMLS_DC) 

ZEND_API void (*zend_execute)(zend_op_array *op_array TSRMLS_DC);

ZEND_API void (*zend_execute_internal)(zend_execute_data *execute_data_ptr, int return_value_used TSRMLS_DC);

ZEND_API const zend_fcall_info empty_fcall_info = { 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0 };

ZEND_API const zend_fcall_info_cache empty_fcall_info_cache = { 0, NULL, NULL, NULL, NULL };

ZEND_API char *get_active_class_name(char **space TSRMLS_DC) 

ZEND_API char *get_active_function_name(TSRMLS_D) 

ZEND_API char *zend_get_executed_filename(TSRMLS_D) 

ZEND_API uint zend_get_executed_lineno(TSRMLS_D) 

ZEND_API zend_bool zend_is_executing(TSRMLS_D) 

ZEND_API void _zval_ptr_dtor(zval **zval_ptr ZEND_FILE_LINE_DC) 

ZEND_API void _zval_internal_ptr_dtor(zval **zval_ptr ZEND_FILE_LINE_DC) 

ZEND_API int zend_is_true(zval *op) 

ZEND_API int zval_update_constant_ex(zval **pp, void *arg, zend_class_entry *scope TSRMLS_DC) 

ZEND_API int zval_update_constant_inline_change(zval **pp, void *scope TSRMLS_DC) 

ZEND_API int zval_update_constant_no_inline_change(zval **pp, void *scope TSRMLS_DC) 

ZEND_API int zval_update_constant(zval **pp, void *arg TSRMLS_DC) 

ZEND_API int zend_lookup_class_ex(const char *name, int name_length, int use_autoload, zend_class_entry ***ce TSRMLS_DC) 

ZEND_API int zend_lookup_class(const char *name, int name_length, zend_class_entry ***ce TSRMLS_DC) 

ZEND_API int zend_eval_stringl(char *str, int str_len, zval *retval_ptr, char *string_name TSRMLS_DC) 

ZEND_API int zend_eval_string(char *str, zval *retval_ptr, char *string_name TSRMLS_DC) 

ZEND_API int zend_eval_stringl_ex(char *str, int str_len, zval *retval_ptr, char *string_name, int handle_exceptions TSRMLS_DC) 

ZEND_API int zend_eval_string_ex(char *str, zval *retval_ptr, char *string_name, int handle_exceptions TSRMLS_DC) 

ZEND_API void zend_timeout(int dummy) 

ZEND_API void zend_reset_all_cv(HashTable *symbol_table TSRMLS_DC) 

ZEND_API int zend_delete_global_variable(char *name, int name_len TSRMLS_DC) 

ZEND_API void zend_rebuild_symbol_table(TSRMLS_D) 

ZEND_API zval** zend_get_compiled_variable_value(const zend_execute_data *execute_data_ptr, zend_uint var)

ZEND_API opcode_handler_t *zend_opcode_handlers;

ZEND_API void execute_internal(zend_execute_data *execute_data_ptr, int return_value_used TSRMLS_DC)

ZEND_API int zend_set_user_opcode_handler(zend_uchar opcode, user_opcode_handler_t handler)

ZEND_API user_opcode_handler_t zend_get_user_opcode_handler(zend_uchar opcode)

ZEND_API zval *zend_get_zval_ptr(znode *node, const temp_variable *Ts, zend_free_op *should_free, int type TSRMLS_DC) {

ZEND_API zval **zend_get_zval_ptr_ptr(const znode *node, const temp_variable *Ts, zend_free_op *should_free, int type TSRMLS_DC) {

ZEND_API zend_llist zend_extensions;

ZEND_API void zend_extension_dispatch_message(int message, void *arg)

ZEND_API int zend_get_resource_handle(zend_extension *extension)

ZEND_API zend_extension *zend_get_extension(const char *extension_name)

ZEND_API void zend_init_fpu(TSRMLS_D) 

ZEND_API void zend_shutdown_fpu(TSRMLS_D) 

ZEND_API void zend_ensure_fpu_mode(TSRMLS_D) 

ZEND_API int gc_globals_id;

ZEND_API zend_gc_globals gc_globals;

ZEND_API void gc_globals_ctor(TSRMLS_D)

ZEND_API void gc_globals_dtor(TSRMLS_D)

ZEND_API void gc_reset(TSRMLS_D)

ZEND_API void gc_init(TSRMLS_D)

ZEND_API void gc_zval_possible_root(zval *zv TSRMLS_DC)

ZEND_API void gc_zobj_possible_root(zval *zv TSRMLS_DC)

ZEND_API void gc_remove_zval_from_buffer(zval *zv TSRMLS_DC)

ZEND_API int gc_collect_cycles(TSRMLS_D)

ZEND_API ulong zend_hash_func(const char *arKey, uint nKeyLength)

ZEND_API int _zend_hash_init(HashTable *ht, uint nSize, hash_func_t pHashFunction, dtor_func_t pDestructor, zend_bool persistent ZEND_FILE_LINE_DC)

ZEND_API int _zend_hash_init_ex(HashTable *ht, uint nSize, hash_func_t pHashFunction, dtor_func_t pDestructor, zend_bool persistent, zend_bool bApplyProtection ZEND_FILE_LINE_DC)

ZEND_API void zend_hash_set_apply_protection(HashTable *ht, zend_bool bApplyProtection)

ZEND_API int _zend_hash_add_or_update(HashTable *ht, const char *arKey, uint nKeyLength, void *pData, uint nDataSize, void **pDest, int flag ZEND_FILE_LINE_DC)

ZEND_API int _zend_hash_quick_add_or_update(HashTable *ht, const char *arKey, uint nKeyLength, ulong h, void *pData, uint nDataSize, void **pDest, int flag ZEND_FILE_LINE_DC)

ZEND_API int zend_hash_add_empty_element(HashTable *ht, const char *arKey, uint nKeyLength)

ZEND_API int _zend_hash_index_update_or_next_insert(HashTable *ht, ulong h, void *pData, uint nDataSize, void **pDest, int flag ZEND_FILE_LINE_DC)

ZEND_API int zend_hash_rehash(HashTable *ht)

ZEND_API int zend_hash_del_key_or_index(HashTable *ht, const char *arKey, uint nKeyLength, ulong h, int flag)

ZEND_API void zend_hash_destroy(HashTable *ht)

ZEND_API void zend_hash_clean(HashTable *ht)

ZEND_API void zend_hash_graceful_destroy(HashTable *ht)

ZEND_API void zend_hash_graceful_reverse_destroy(HashTable *ht)

ZEND_API void zend_hash_apply(HashTable *ht, apply_func_t apply_func TSRMLS_DC)

ZEND_API void zend_hash_apply_with_argument(HashTable *ht, apply_func_arg_t apply_func, void *argument TSRMLS_DC)

ZEND_API void zend_hash_apply_with_arguments(HashTable *ht TSRMLS_DC, apply_func_args_t apply_func, int num_args, ...)

ZEND_API void zend_hash_reverse_apply(HashTable *ht, apply_func_t apply_func TSRMLS_DC)

ZEND_API void zend_hash_copy(HashTable *target, HashTable *source, copy_ctor_func_t pCopyConstructor, void *tmp, uint size)

ZEND_API void _zend_hash_merge(HashTable *target, HashTable *source, copy_ctor_func_t pCopyConstructor, void *tmp, uint size, int overwrite ZEND_FILE_LINE_DC)

ZEND_API void zend_hash_merge_ex(HashTable *target, HashTable *source, copy_ctor_func_t pCopyConstructor, uint size, merge_checker_func_t pMergeSource, void *pParam)

ZEND_API ulong zend_get_hash_value(const char *arKey, uint nKeyLength)

ZEND_API int zend_hash_find(const HashTable *ht, const char *arKey, uint nKeyLength, void **pData)

ZEND_API int zend_hash_quick_find(const HashTable *ht, const char *arKey, uint nKeyLength, ulong h, void **pData)

ZEND_API int zend_hash_exists(const HashTable *ht, const char *arKey, uint nKeyLength)

ZEND_API int zend_hash_quick_exists(const HashTable *ht, const char *arKey, uint nKeyLength, ulong h)

ZEND_API int zend_hash_index_find(const HashTable *ht, ulong h, void **pData)

ZEND_API int zend_hash_index_exists(const HashTable *ht, ulong h)

ZEND_API int zend_hash_num_elements(const HashTable *ht)

ZEND_API int zend_hash_get_pointer(const HashTable *ht, HashPointer *ptr)

ZEND_API int zend_hash_set_pointer(HashTable *ht, const HashPointer *ptr)

ZEND_API void zend_hash_internal_pointer_reset_ex(HashTable *ht, HashPosition *pos)

ZEND_API void zend_hash_internal_pointer_end_ex(HashTable *ht, HashPosition *pos)

ZEND_API int zend_hash_move_forward_ex(HashTable *ht, HashPosition *pos)

ZEND_API int zend_hash_move_backwards_ex(HashTable *ht, HashPosition *pos)

ZEND_API int zend_hash_get_current_key_ex(const HashTable *ht, char **str_index, uint *str_length, ulong *num_index, zend_bool duplicate, HashPosition *pos)

ZEND_API int zend_hash_get_current_key_type_ex(HashTable *ht, HashPosition *pos)

ZEND_API int zend_hash_get_current_data_ex(HashTable *ht, void **pData, HashPosition *pos)

ZEND_API int zend_hash_update_current_key_ex(HashTable *ht, int key_type, const char *str_index, uint str_length, ulong num_index, int mode, HashPosition *pos)

ZEND_API int zend_hash_sort(HashTable *ht, sort_func_t sort_func,

ZEND_API int zend_hash_compare(HashTable *ht1, HashTable *ht2, compare_func_t compar, zend_bool ordered TSRMLS_DC)

ZEND_API int zend_hash_minmax(const HashTable *ht, compare_func_t compar, int flag, void **pData TSRMLS_DC)

ZEND_API ulong zend_hash_next_free_element(const HashTable *ht)

ZEND_API void zend_html_putc(char c)

ZEND_API void zend_html_puts(const char *s, uint len TSRMLS_DC)

ZEND_API void zend_highlight(zend_syntax_highlighter_ini *syntax_highlighter_ini TSRMLS_DC)

ZEND_API void zend_strip(TSRMLS_D)

ZEND_API void zend_indent()

ZEND_API int zend_ini_startup(TSRMLS_D) 

ZEND_API int zend_ini_shutdown(TSRMLS_D) 

ZEND_API int zend_ini_global_shutdown(TSRMLS_D) 

ZEND_API int zend_ini_deactivate(TSRMLS_D) 

ZEND_API int zend_copy_ini_directives(TSRMLS_D) 

ZEND_API void zend_ini_sort_entries(TSRMLS_D) 

ZEND_API int zend_register_ini_entries(const zend_ini_entry *ini_entry, int module_number TSRMLS_DC) 

ZEND_API void zend_unregister_ini_entries(int module_number TSRMLS_DC) 

ZEND_API void zend_ini_refresh_caches(int stage TSRMLS_DC) 

ZEND_API int zend_alter_ini_entry(char *name, uint name_length, char *new_value, uint new_value_length, int modify_type, int stage) 

ZEND_API int zend_alter_ini_entry_ex(char *name, uint name_length, char *new_value, uint new_value_length, int modify_type, int stage, int force_change TSRMLS_DC) 

ZEND_API int zend_restore_ini_entry(char *name, uint name_length, int stage) 

ZEND_API int zend_ini_register_displayer(char *name, uint name_length, void (*displayer)(zend_ini_entry *ini_entry, int type)) 

ZEND_API long zend_ini_long(char *name, uint name_length, int orig) 

ZEND_API double zend_ini_double(char *name, uint name_length, int orig) 

ZEND_API char *zend_ini_string_ex(char *name, uint name_length, int orig, zend_bool *exists) 

ZEND_API char *zend_ini_string(char *name, uint name_length, int orig) 

ZEND_API ZEND_INI_MH(OnUpdateBool) 

ZEND_API ZEND_INI_MH(OnUpdateLong) 

ZEND_API ZEND_INI_MH(OnUpdateLongGEZero) 

ZEND_API ZEND_INI_MH(OnUpdateReal) 

ZEND_API ZEND_INI_MH(OnUpdateString) 

ZEND_API ZEND_INI_MH(OnUpdateStringUnempty) 

ZEND_API int zend_parse_ini_file(zend_file_handle *fh, zend_bool unbuffered_errors, int scanner_mode, zend_ini_parser_cb_t ini_parser_cb, void *arg TSRMLS_DC)

ZEND_API int zend_parse_ini_string(char *str, zend_bool unbuffered_errors, int scanner_mode, zend_ini_parser_cb_t ini_parser_cb, void *arg TSRMLS_DC)

ZEND_API ts_rsrc_id ini_scanner_globals_id;

ZEND_API zend_ini_scanner_globals ini_scanner_globals;

ZEND_API zend_class_entry *zend_ce_traversable;

ZEND_API zend_class_entry *zend_ce_aggregate;

ZEND_API zend_class_entry *zend_ce_iterator;

ZEND_API zend_class_entry *zend_ce_arrayaccess;

ZEND_API zend_class_entry *zend_ce_serializable;

ZEND_API zval* zend_call_method(zval **object_pp, zend_class_entry *obj_ce, zend_function **fn_proxy, char *function_name, int function_name_len, zval **retval_ptr_ptr, int param_count, zval* arg1, zval* arg2 TSRMLS_DC)

ZEND_API zval *zend_user_it_new_iterator(zend_class_entry *ce, zval *object TSRMLS_DC)

ZEND_API void zend_user_it_invalidate_current(zend_object_iterator *_iter TSRMLS_DC)

ZEND_API int zend_user_it_valid(zend_object_iterator *_iter TSRMLS_DC)

ZEND_API void zend_user_it_get_current_data(zend_object_iterator *_iter, zval ***data TSRMLS_DC)

ZEND_API int zend_user_it_get_current_key(zend_object_iterator *_iter, char **str_key, uint *str_key_len, ulong *int_key TSRMLS_DC)

ZEND_API void zend_user_it_move_forward(zend_object_iterator *_iter TSRMLS_DC)

ZEND_API void zend_user_it_rewind(zend_object_iterator *_iter TSRMLS_DC)

ZEND_API zend_object_iterator *zend_user_it_get_new_iterator(zend_class_entry *ce, zval *object, int by_ref TSRMLS_DC)

ZEND_API int zend_user_serialize(zval *object, unsigned char **buffer, zend_uint *buf_len, zend_serialize_data *data TSRMLS_DC)

ZEND_API int zend_user_unserialize(zval **object, zend_class_entry *ce, const unsigned char *buf, zend_uint buf_len, zend_unserialize_data *data TSRMLS_DC)

ZEND_API int zend_class_serialize_deny(zval *object, unsigned char **buffer, zend_uint *buf_len, zend_serialize_data *data TSRMLS_DC) 

ZEND_API int zend_class_unserialize_deny(zval **object, zend_class_entry *ce, const unsigned char *buf, zend_uint buf_len, zend_unserialize_data *data TSRMLS_DC) 

ZEND_API void zend_register_interfaces(TSRMLS_D)

ZEND_API void zend_register_iterator_wrapper(TSRMLS_D)

ZEND_API zval *zend_iterator_wrap(zend_object_iterator *iter TSRMLS_DC)

ZEND_API enum zend_object_iterator_kind zend_iterator_unwrap(

ZEND_API ts_rsrc_id language_scanner_globals_id;

ZEND_API zend_php_scanner_globals language_scanner_globals;

ZEND_API void zend_save_lexical_state(zend_lex_state *lex_state TSRMLS_DC)

ZEND_API void zend_restore_lexical_state(zend_lex_state *lex_state TSRMLS_DC)

ZEND_API void zend_destroy_file_handle(zend_file_handle *file_handle TSRMLS_DC)

ZEND_API int open_file_for_scanning(zend_file_handle *file_handle TSRMLS_DC)

ZEND_API zend_op_array *compile_file(zend_file_handle *file_handle, int type TSRMLS_DC)

ZEND_API int zend_prepare_string_for_scanning(zval *str, char *filename TSRMLS_DC)

ZEND_API size_t zend_get_scanned_file_offset(TSRMLS_D)

ZEND_API void zend_multibyte_yyinput_again(zend_encoding_filter old_input_filter, zend_encoding *old_encoding TSRMLS_DC)

ZEND_API int zend_multibyte_yyinput(zend_file_handle *file_handle, char *buf, size_t len TSRMLS_DC)

ZEND_API int zend_multibyte_read_script(unsigned char *buf, size_t n TSRMLS_DC)

ZEND_API int le_index_ptr;

ZEND_API int zend_list_insert(void *ptr, int type)

ZEND_API int _zend_list_delete(int id TSRMLS_DC)

ZEND_API void *_zend_list_find(int id, int *type TSRMLS_DC)

ZEND_API int _zend_list_addref(int id TSRMLS_DC)

ZEND_API int zend_register_resource(zval *rsrc_result, void *rsrc_pointer, int rsrc_type)

ZEND_API void *zend_fetch_resource(zval **passed_id TSRMLS_DC, int default_id, char *resource_type_name, int *found_resource_type, int num_resource_types, ...)

ZEND_API int zend_register_list_destructors(void (*ld)(void *), void (*pld)(void *), int module_number)

ZEND_API int zend_register_list_destructors_ex(rsrc_dtor_func_t ld, rsrc_dtor_func_t pld, char *type_name, int module_number)

ZEND_API int zend_fetch_list_dtor_id(char *type_name)

ZEND_API void zend_llist_init(zend_llist *l, size_t size, llist_dtor_func_t dtor, unsigned char persistent)

ZEND_API void zend_llist_add_element(zend_llist *l, void *element)

ZEND_API void zend_llist_prepend_element(zend_llist *l, void *element)

ZEND_API void zend_llist_del_element(zend_llist *l, void *element, int (*compare)(void *element1, void *element2))

ZEND_API void zend_llist_destroy(zend_llist *l)

ZEND_API void zend_llist_clean(zend_llist *l)

ZEND_API void *zend_llist_remove_tail(zend_llist *l)

ZEND_API void zend_llist_copy(zend_llist *dst, zend_llist *src)

ZEND_API void zend_llist_apply_with_del(zend_llist *l, int (*func)(void *data))

ZEND_API void zend_llist_apply(zend_llist *l, llist_apply_func_t func TSRMLS_DC)

ZEND_API void zend_llist_sort(zend_llist *l, llist_compare_func_t comp_func TSRMLS_DC)

ZEND_API void zend_llist_apply_with_argument(zend_llist *l, llist_apply_with_arg_func_t func, void *arg TSRMLS_DC)

ZEND_API void zend_llist_apply_with_arguments(zend_llist *l, llist_apply_with_args_func_t func TSRMLS_DC, int num_args, ...)

ZEND_API int zend_llist_count(zend_llist *l)

ZEND_API void *zend_llist_get_first_ex(zend_llist *l, zend_llist_position *pos)

ZEND_API void *zend_llist_get_last_ex(zend_llist *l, zend_llist_position *pos)

ZEND_API void *zend_llist_get_next_ex(zend_llist *l, zend_llist_position *pos)

ZEND_API void *zend_llist_get_prev_ex(zend_llist *l, zend_llist_position *pos)

ZEND_API int zend_multibyte_set_script_encoding(const char *encoding_list,

ZEND_API int zend_multibyte_set_internal_encoding(const char *encoding_name TSRMLS_DC)

ZEND_API int zend_multibyte_set_functions(zend_encoding_detector encoding_detector, zend_encoding_converter encoding_converter, zend_encoding_oddlen encoding_oddlen TSRMLS_DC)

ZEND_API int zend_multibyte_set_filter(zend_encoding *onetime_encoding TSRMLS_DC)

ZEND_API zend_encoding* zend_multibyte_fetch_encoding(const char *encoding_name)

ZEND_API size_t zend_multibyte_script_encoding_filter(unsigned char **to, size_t

ZEND_API size_t zend_multibyte_internal_encoding_filter(unsigned char **to, size_t *to_length, const unsigned char *from, size_t from_length TSRMLS_DC)

ZEND_API HashTable *zend_std_get_properties(zval *object TSRMLS_DC) 

ZEND_API HashTable *zend_std_get_debug_info(zval *object, int *is_temp TSRMLS_DC) 

ZEND_API struct _zend_property_info *zend_get_property_info(zend_class_entry *ce, zval *member, int silent TSRMLS_DC) 

ZEND_API int zend_check_property_access(zend_object *zobj, char *prop_info_name, int prop_info_name_len TSRMLS_DC) 

ZEND_API void zend_std_call_user_call(INTERNAL_FUNCTION_PARAMETERS) 

ZEND_API int zend_check_private(zend_function *fbc, zend_class_entry *ce, char *function_name_strval, int function_name_strlen TSRMLS_DC) 

ZEND_API int zend_check_protected(zend_class_entry *ce, zend_class_entry *scope) 

ZEND_API void zend_std_callstatic_user_call(INTERNAL_FUNCTION_PARAMETERS) 

ZEND_API zend_function *zend_std_get_static_method(zend_class_entry *ce, char *function_name_strval, int function_name_strlen TSRMLS_DC) 

ZEND_API zval **zend_std_get_static_property(zend_class_entry *ce, char *property_name, int property_name_len, zend_bool silent TSRMLS_DC) 

ZEND_API zend_bool zend_std_unset_static_property(zend_class_entry *ce, char *property_name, int property_name_len TSRMLS_DC) 

ZEND_API union _zend_function *zend_std_get_constructor(zval *object TSRMLS_DC) 

ZEND_API int zend_std_cast_object_tostring(zval *readobj, zval *writeobj, int type TSRMLS_DC) 

ZEND_API zend_object_handlers std_object_handlers = {

ZEND_API void zend_objects_store_init(zend_objects_store *objects, zend_uint init_size)

ZEND_API void zend_objects_store_destroy(zend_objects_store *objects)

ZEND_API void zend_objects_store_call_destructors(zend_objects_store *objects TSRMLS_DC)

ZEND_API void zend_objects_store_mark_destructed(zend_objects_store *objects TSRMLS_DC)

ZEND_API void zend_objects_store_free_object_storage(zend_objects_store *objects TSRMLS_DC)

ZEND_API zend_object_handle zend_objects_store_put(void *object, zend_objects_store_dtor_t dtor, zend_objects_free_object_storage_t free_storage, zend_objects_store_clone_t clone TSRMLS_DC)

ZEND_API zend_uint zend_objects_store_get_refcount(zval *object TSRMLS_DC)

ZEND_API void zend_objects_store_add_ref(zval *object TSRMLS_DC)

ZEND_API void zend_objects_store_add_ref_by_handle(zend_object_handle handle TSRMLS_DC)

ZEND_API void zend_objects_store_del_ref(zval *zobject TSRMLS_DC)

ZEND_API void zend_objects_store_del_ref_by_handle_ex(zend_object_handle handle, const zend_object_handlers *handlers TSRMLS_DC) 

ZEND_API zend_object_value zend_objects_store_clone_obj(zval *zobject TSRMLS_DC)

ZEND_API void *zend_object_store_get_object(const zval *zobject TSRMLS_DC)

ZEND_API void *zend_object_store_get_object_by_handle(zend_object_handle handle TSRMLS_DC)

ZEND_API void zend_object_store_set_object(zval *zobject, void *object TSRMLS_DC)

ZEND_API void zend_object_store_ctor_failed(zval *zobject TSRMLS_DC)

ZEND_API void zend_objects_proxy_free_storage(zend_proxy_object *object TSRMLS_DC)

ZEND_API void zend_objects_proxy_clone(zend_proxy_object *object, zend_proxy_object **object_clone TSRMLS_DC)

ZEND_API zval *zend_object_create_proxy(zval *object, zval *member TSRMLS_DC)

ZEND_API void zend_object_proxy_set(zval **property, zval *value TSRMLS_DC)

ZEND_API zval* zend_object_proxy_get(zval *property TSRMLS_DC)

ZEND_API zend_object_handlers *zend_get_std_object_handlers(void)

ZEND_API void zend_object_std_init(zend_object *object, zend_class_entry *ce TSRMLS_DC)

ZEND_API void zend_object_std_dtor(zend_object *object TSRMLS_DC)

ZEND_API void zend_objects_destroy_object(zend_object *object, zend_object_handle handle TSRMLS_DC)

ZEND_API void zend_objects_free_object_storage(zend_object *object TSRMLS_DC)

ZEND_API zend_object_value zend_objects_new(zend_object **object, zend_class_entry *class_type TSRMLS_DC)

ZEND_API zend_object *zend_objects_get_address(const zval *zobject TSRMLS_DC)

ZEND_API void zend_objects_clone_members(zend_object *new_object, zend_object_value new_obj_val, zend_object *old_object, zend_object_handle handle TSRMLS_DC)

ZEND_API zend_object_value zend_objects_clone_obj(zval *zobject TSRMLS_DC)

ZEND_API void destroy_zend_function(zend_function *function TSRMLS_DC)

ZEND_API void zend_function_dtor(zend_function *function)

ZEND_API int zend_cleanup_function_data(zend_function *function TSRMLS_DC)

ZEND_API int zend_cleanup_function_data_full(zend_function *function TSRMLS_DC)

ZEND_API int zend_cleanup_class_data(zend_class_entry **pce TSRMLS_DC)

ZEND_API void destroy_zend_class(zend_class_entry **pce)

ZEND_API void destroy_op_array(zend_op_array *op_array TSRMLS_DC)

ZEND_API int pass_two(zend_op_array *op_array TSRMLS_DC)

ZEND_API unary_op_type get_unary_op(int opcode)

ZEND_API binary_op_type get_binary_op(int opcode)

ZEND_API int zend_atoi(const char *str, int str_len) 

ZEND_API long zend_atol(const char *str, int str_len) 

ZEND_API double zend_string_to_double(const char *number, zend_uint length) 

ZEND_API void convert_scalar_to_number(zval *op TSRMLS_DC) 

ZEND_API void convert_to_long(zval *op) 

ZEND_API void convert_to_long_base(zval *op, int base) 

ZEND_API void convert_to_double(zval *op) 

ZEND_API void convert_to_null(zval *op) 

ZEND_API void convert_to_boolean(zval *op) 

ZEND_API void _convert_to_string(zval *op ZEND_FILE_LINE_DC) 

ZEND_API void convert_to_array(zval *op) 

ZEND_API void convert_to_object(zval *op) 

ZEND_API void multi_convert_to_long_ex(int argc, ...) 

ZEND_API void multi_convert_to_double_ex(int argc, ...) 

ZEND_API void multi_convert_to_string_ex(int argc, ...) 

ZEND_API int add_function(zval *result, zval *op1, zval *op2 TSRMLS_DC) 

ZEND_API int sub_function(zval *result, zval *op1, zval *op2 TSRMLS_DC) 

ZEND_API int mul_function(zval *result, zval *op1, zval *op2 TSRMLS_DC) 

ZEND_API int div_function(zval *result, zval *op1, zval *op2 TSRMLS_DC) 

ZEND_API int mod_function(zval *result, zval *op1, zval *op2 TSRMLS_DC) 

ZEND_API int boolean_xor_function(zval *result, zval *op1, zval *op2 TSRMLS_DC) 

ZEND_API int boolean_not_function(zval *result, zval *op1 TSRMLS_DC) 

ZEND_API int bitwise_not_function(zval *result, zval *op1 TSRMLS_DC) 

ZEND_API int bitwise_or_function(zval *result, zval *op1, zval *op2 TSRMLS_DC) 

ZEND_API int bitwise_and_function(zval *result, zval *op1, zval *op2 TSRMLS_DC) 

ZEND_API int bitwise_xor_function(zval *result, zval *op1, zval *op2 TSRMLS_DC) 

ZEND_API int shift_left_function(zval *result, zval *op1, zval *op2 TSRMLS_DC) 

ZEND_API int shift_right_function(zval *result, zval *op1, zval *op2 TSRMLS_DC) 

ZEND_API int add_char_to_string(zval *result, const zval *op1, const zval *op2) 

ZEND_API int add_string_to_string(zval *result, const zval *op1, const zval *op2) 

ZEND_API int concat_function(zval *result, zval *op1, zval *op2 TSRMLS_DC) 

ZEND_API int string_compare_function(zval *result, zval *op1, zval *op2 TSRMLS_DC) 

ZEND_API int string_locale_compare_function(zval *result, zval *op1, zval *op2 TSRMLS_DC) 

ZEND_API int numeric_compare_function(zval *result, zval *op1, zval *op2 TSRMLS_DC) 

ZEND_API int compare_function(zval *result, zval *op1, zval *op2 TSRMLS_DC) 

ZEND_API int is_identical_function(zval *result, zval *op1, zval *op2 TSRMLS_DC) 

ZEND_API int is_not_identical_function(zval *result, zval *op1, zval *op2 TSRMLS_DC) 

ZEND_API int is_equal_function(zval *result, zval *op1, zval *op2 TSRMLS_DC) 

ZEND_API int is_not_equal_function(zval *result, zval *op1, zval *op2 TSRMLS_DC) 

ZEND_API int is_smaller_function(zval *result, zval *op1, zval *op2 TSRMLS_DC) 

ZEND_API int is_smaller_or_equal_function(zval *result, zval *op1, zval *op2 TSRMLS_DC) 

ZEND_API zend_bool instanceof_function_ex(const zend_class_entry *instance_ce, const zend_class_entry *ce, zend_bool interfaces_only TSRMLS_DC) 

ZEND_API zend_bool instanceof_function(const zend_class_entry *instance_ce, const zend_class_entry *ce TSRMLS_DC) 

ZEND_API int increment_function(zval *op1) 

ZEND_API int decrement_function(zval *op1) 

ZEND_API int zval_is_true(zval *op) 

ZEND_API void zend_update_current_locale(void) 

ZEND_API char *zend_str_tolower_copy(char *dest, const char *source, unsigned int length) 

ZEND_API char *zend_str_tolower_dup(const char *source, unsigned int length) 

ZEND_API void zend_str_tolower(char *str, unsigned int length) 

ZEND_API int zend_binary_strcmp(const char *s1, uint len1, const char *s2, uint len2) 

ZEND_API int zend_binary_strncmp(const char *s1, uint len1, const char *s2, uint len2, uint length) 

ZEND_API int zend_binary_strcasecmp(const char *s1, uint len1, const char *s2, uint len2) 

ZEND_API int zend_binary_strncasecmp(const char *s1, uint len1, const char *s2, uint len2, uint length) 

ZEND_API int zend_binary_zval_strcmp(zval *s1, zval *s2) 

ZEND_API int zend_binary_zval_strncmp(zval *s1, zval *s2, zval *s3) 

ZEND_API int zend_binary_zval_strcasecmp(zval *s1, zval *s2) 

ZEND_API int zend_binary_zval_strncasecmp(zval *s1, zval *s2, zval *s3) 

ZEND_API void zendi_smart_strcmp(zval *result, zval *s1, zval *s2) 

ZEND_API int zend_compare_symbol_tables_i(HashTable *ht1, HashTable *ht2 TSRMLS_DC) 

ZEND_API void zend_compare_symbol_tables(zval *result, HashTable *ht1, HashTable *ht2 TSRMLS_DC) 

ZEND_API void zend_compare_arrays(zval *result, zval *a1, zval *a2 TSRMLS_DC) 

ZEND_API void zend_compare_objects(zval *result, zval *o1, zval *o2 TSRMLS_DC) 

ZEND_API void zend_locale_sprintf_double(zval *op ZEND_FILE_LINE_DC) 

ZEND_API void zend_ptr_stack_init_ex(zend_ptr_stack *stack, zend_bool persistent)

ZEND_API void zend_ptr_stack_init(zend_ptr_stack *stack)

ZEND_API void zend_ptr_stack_n_push(zend_ptr_stack *stack, int count, ...)

ZEND_API void zend_ptr_stack_n_pop(zend_ptr_stack *stack, int count, ...)

ZEND_API void zend_ptr_stack_destroy(zend_ptr_stack *stack)

ZEND_API void zend_ptr_stack_apply(zend_ptr_stack *stack, void (*func)(void *))

ZEND_API void zend_ptr_stack_clean(zend_ptr_stack *stack, void (*func)(void *), zend_bool free_elements)

ZEND_API int zend_ptr_stack_num_elements(zend_ptr_stack *stack)

ZEND_API void zend_qsort(void *base, size_t nmemb, size_t siz, compare_func_t compare TSRMLS_DC)

ZEND_API int zend_stack_init(zend_stack *stack)

ZEND_API int zend_stack_push(zend_stack *stack, const void *element, int size)

ZEND_API int zend_stack_top(const zend_stack *stack, void **element)

ZEND_API int zend_stack_del_top(zend_stack *stack)

ZEND_API int zend_stack_int_top(const zend_stack *stack)

ZEND_API int zend_stack_is_empty(const zend_stack *stack)

ZEND_API int zend_stack_destroy(zend_stack *stack)

ZEND_API void **zend_stack_base(const zend_stack *stack)

ZEND_API int zend_stack_count(const zend_stack *stack)

ZEND_API void zend_stack_apply(zend_stack *stack, int type, int (*apply_function)(void *element))

ZEND_API void zend_stack_apply_with_argument(zend_stack *stack, int type, int (*apply_function)(void *element, void *arg), void *arg)

ZEND_API int zend_stream_open(const char *filename, zend_file_handle *handle TSRMLS_DC) 

ZEND_API int zend_stream_fixup(zend_file_handle *file_handle, char **buf, size_t *len TSRMLS_DC) 

ZEND_API void zend_file_handle_dtor(zend_file_handle *fh TSRMLS_DC) 

ZEND_API int zend_compare_file_handles(zend_file_handle *fh1, zend_file_handle *fh2) 

ZEND_API int zend_startup_strtod(void) 

ZEND_API int zend_shutdown_strtod(void) 

ZEND_API void zend_freedtoa(char *s)

ZEND_API char * zend_dtoa(double _d, int mode, int ndigits, int *decpt, int *sign, char **rve)

ZEND_API double zend_strtod (CONST char *s00, char **se)

ZEND_API double zend_hex_strtod(const char *str, char **endptr)

ZEND_API double zend_oct_strtod(const char *str, char **endptr)

ZEND_API int _zend_ts_hash_init(TsHashTable *ht, uint nSize, hash_func_t pHashFunction, dtor_func_t pDestructor, zend_bool persistent ZEND_FILE_LINE_DC)

ZEND_API int _zend_ts_hash_init_ex(TsHashTable *ht, uint nSize, hash_func_t pHashFunction, dtor_func_t pDestructor, zend_bool persistent, zend_bool bApplyProtection ZEND_FILE_LINE_DC)

ZEND_API void zend_ts_hash_destroy(TsHashTable *ht)

ZEND_API void zend_ts_hash_clean(TsHashTable *ht)

ZEND_API int _zend_ts_hash_add_or_update(TsHashTable *ht, char *arKey, uint nKeyLength, void *pData, uint nDataSize, void **pDest, int flag ZEND_FILE_LINE_DC)

ZEND_API int _zend_ts_hash_quick_add_or_update(TsHashTable *ht, char *arKey, uint nKeyLength, ulong h, void *pData, uint nDataSize, void **pDest, int flag ZEND_FILE_LINE_DC)

ZEND_API int _zend_ts_hash_index_update_or_next_insert(TsHashTable *ht, ulong h, void *pData, uint nDataSize, void **pDest, int flag ZEND_FILE_LINE_DC)

ZEND_API int zend_ts_hash_add_empty_element(TsHashTable *ht, char *arKey, uint nKeyLength)

ZEND_API void zend_ts_hash_graceful_destroy(TsHashTable *ht)

ZEND_API void zend_ts_hash_apply(TsHashTable *ht, apply_func_t apply_func TSRMLS_DC)

ZEND_API void zend_ts_hash_apply_with_argument(TsHashTable *ht, apply_func_arg_t apply_func, void *argument TSRMLS_DC)

ZEND_API void zend_ts_hash_apply_with_arguments(TsHashTable *ht TSRMLS_DC, apply_func_args_t apply_func, int num_args, ...)

ZEND_API void zend_ts_hash_reverse_apply(TsHashTable *ht, apply_func_t apply_func TSRMLS_DC)

ZEND_API int zend_ts_hash_del_key_or_index(TsHashTable *ht, char *arKey, uint nKeyLength, ulong h, int flag)

ZEND_API ulong zend_ts_get_hash_value(TsHashTable *ht, char *arKey, uint nKeyLength)

ZEND_API int zend_ts_hash_find(TsHashTable *ht, char *arKey, uint nKeyLength, void **pData)

ZEND_API int zend_ts_hash_quick_find(TsHashTable *ht, char *arKey, uint nKeyLength, ulong h, void **pData)

ZEND_API int zend_ts_hash_index_find(TsHashTable *ht, ulong h, void **pData)

ZEND_API int zend_ts_hash_exists(TsHashTable *ht, char *arKey, uint nKeyLength)

ZEND_API int zend_ts_hash_index_exists(TsHashTable *ht, ulong h)

ZEND_API void zend_ts_hash_copy(TsHashTable *target, TsHashTable *source, copy_ctor_func_t pCopyConstructor, void *tmp, uint size)

ZEND_API void zend_ts_hash_copy_to_hash(HashTable *target, TsHashTable *source, copy_ctor_func_t pCopyConstructor, void *tmp, uint size)

ZEND_API void zend_ts_hash_merge(TsHashTable *target, TsHashTable *source, copy_ctor_func_t pCopyConstructor, void *tmp, uint size, int overwrite)

ZEND_API void zend_ts_hash_merge_ex(TsHashTable *target, TsHashTable *source, copy_ctor_func_t pCopyConstructor, uint size, merge_checker_func_t pMergeSource, void *pParam)

ZEND_API int zend_ts_hash_sort(TsHashTable *ht, sort_func_t sort_func, compare_func_t compare_func, int renumber TSRMLS_DC)

ZEND_API int zend_ts_hash_compare(TsHashTable *ht1, TsHashTable *ht2, compare_func_t compar, zend_bool ordered TSRMLS_DC)

ZEND_API int zend_ts_hash_minmax(TsHashTable *ht, compare_func_t compar, int flag, void **pData TSRMLS_DC)

ZEND_API int zend_ts_hash_num_elements(TsHashTable *ht)

ZEND_API int zend_ts_hash_rehash(TsHashTable *ht)

ZEND_API void _zval_dtor_func(zval *zvalue ZEND_FILE_LINE_DC)

ZEND_API void _zval_internal_dtor(zval *zvalue ZEND_FILE_LINE_DC)

ZEND_API void zval_add_ref(zval **p)

ZEND_API void _zval_copy_ctor_func(zval *zvalue ZEND_FILE_LINE_DC)

ZEND_API int zend_print_variable(zval *var) 

ZEND_API void _zval_dtor_wrapper(zval *zvalue)

ZEND_API void zval_property_ctor(zval **p) 

ZEND_API void _zval_copy_ctor_wrapper(zval *zvalue)

ZEND_API void _zval_internal_dtor_wrapper(zval *zvalue)

ZEND_API void _zval_ptr_dtor_wrapper(zval **zval_ptr)

ZEND_API void _zval_internal_ptr_dtor_wrapper(zval **zval_ptr)


