add_executable(unit_tests
        unit_tests.c
        core/uri_test.c
        ../src/core/uri.h
        ../src/core/uri.c)

target_include_directories(unit_tests PRIVATE ../src)

add_test(NAME parse_uri COMMAND unit_tests)
