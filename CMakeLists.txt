cmake_minimum_required(VERSION 3.28)

project(overbase C)

set(CMAKE_C_STANDARD 11)

include_directories(src)

add_executable(overbase
        src/main.c
        src/cmd/help.c)
