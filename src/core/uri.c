#include <string.h>
#include <stdio.h>
#include "core/uri.h"

URI parse_uri(const char* uri_string) {
    URI uri;
    char dbms[11];
    char user[31];
    char pass[31];
    char host[63];
    char db[31];

    sscanf(uri_string, "%10[^:]://%30[^:]:%30[^@]@%60[^:]:%hu/%30s", dbms, user, pass, host, &uri.port, db);

    if (strcmp(dbms, "mysql") == 0) {
        uri.dbms = MYSQL;
    } else if (strcmp(dbms, "postgresql") == 0) {
        uri.dbms = POSTGRESQL;
    }

    uri.user = strdup(user);
    uri.password = strdup(pass);
    uri.host = strdup(host);
    uri.db = strdup(db);

    return uri;
}