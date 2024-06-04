#include <string.h>
#include <assert.h>
#include "core/uri.h"

void test_parse_uri() {
    const char* test_uri_string = "postgresql://user:pass@host:5432/db";

    URI result = parse_uri(test_uri_string);

    assert(result.dbms == POSTGRESQL);
    assert(strcmp(result.user, "user") == 0);
    assert(strcmp(result.password, "pass") == 0);
    assert(strcmp(result.host, "host") == 0);
    assert(result.port == 5432);
    assert(strcmp(result.db, "db") == 0);
}