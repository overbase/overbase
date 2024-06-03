#ifndef OVERBASE_URI_H
#define OVERBASE_URI_H

#include <stdint.h>

typedef enum {
    MYSQL,
    POSTGRESQL
} DBMS;

typedef struct {
    DBMS dbms;
    char* user;
    char* password;
    char* host;
    uint16_t port;
    char* db;
} URI;

#endif //OVERBASE_URI_H
